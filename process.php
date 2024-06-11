<?php
session_start();

// Fungsi untuk logout
function logout() {
    session_unset();
    session_destroy();
}

$host = "localhost";
$user = "root";
$password = "";
$db = "tabungan_siswa_kei";
$config = mysqli_connect($host, $user, $password, $db);

if (!$config) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Dapatkan data user dari form
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

// Check apakah user dengan username tersebut ada di table users
$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $config->stmt_init();

if ($stmt->prepare($query)) {
    $stmt->bind_param('s', $user['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row != null) {
        // Username ditemukan
        // Kita cek apakah password dengan hash password sesuai.
        if (password_verify($user['password'], $row['password'])) {
            // Cek apakah sudah login
            if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                // Sudah login, logout dulu
                logout();
            }

            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['terakhir_login'] = date('Y-m-d H:i:s');
            $_SESSION['message'] = 'Berhasil login ke dalam sistem.';
            $_SESSION['saldo'] = $row['no_tabungan'];

            // Update last login di database
            $updateQuery = "UPDATE users SET terakhir_login = NOW() WHERE username = ?";
            $stmt->prepare($updateQuery);
            $stmt->bind_param('s', $user['username']);
            $stmt->execute();
            $stmt->close();

            // Arahkan ke halaman sesuai dengan peran (role)
            if ($_SESSION['role'] == 'admin') {
                header("Location: admin/index.php");
            } elseif ($_SESSION['role'] == 'user') {
                header("Location: users/index.php");
            } else {
                // Tambahkan penanganan untuk peran (role) lainnya jika diperlukan
                header("Location: index.php");
            }
        } else {
            $_SESSION['error'] = 'Password anda salah.';
            $_SESSION['attempts'] = isset($_SESSION['attempts']) ? $_SESSION['attempts'] + 1 : 1;

            if ($_SESSION['attempts'] >= 3) {
                $_SESSION['error'] .= ' Terlalu banyak percobaan login gagal. Coba lagi nanti.';
                logout(); // Hapus sesi untuk menghindari percobaan login berulang
            }

            header("Location: index.php");
        }
    } else {
        $_SESSION['error'] = 'Username tidak ditemukan.';
        header("Location: index.php");
    }
} else {
    die("Query preparation failed: " . $stmt->error);
}
?>
