<?php include 'koneksi.php' ;?>
<?php
 


$user = [
    'nama' => $_POST['nama'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation'],
];
// Validasi jika password & password_confirmation sama
if ($user['password'] != $user['password_confirmation']) {
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['username'] = $_POST['username'];
    header("Location: register.php");
    return;
}
// Check apakah user dengan username tersebut ada di table users
$query = "select * from users where username = ? limit 1";
$stmt = $config->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);
// Jika username sudah ada, maka return kembali ke halaman register.
if ($row != null) {
    $_SESSION['error'] = 'Username: ' . $user['username'] . ' yang anda masukkan sudah ada di database.';
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['password_confirmation'] = $_POST['password_confirmation'];
    header("Location: register.php");
    return;
} else {
    // Hash password
    $password = password_hash($user['password'], PASSWORD_DEFAULT);
    // Username unik. Simpan di database.
    $query = "insert into users (nama, username, password) values  (?,?,?)";
    $stmt = $config->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('sss', $user['nama'], $user['username'], $password);
    $stmt->execute();
    $result = $stmt->get_result();
    var_dump($result);
    $_SESSION['message'] = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
    header("Location: register.php");
}
?>
