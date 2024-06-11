<?php include 'koneksi.php' ;?>
<?php
session_start();

// Pengecekan apakah pengguna sudah login
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Redirect ke halaman login jika belum login
    header("Location: ../index.php");
    exit;
}

// Fungsi untuk logout
function logout() {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit;
}

// Logout jika ada parameter logout di URL
if (isset($_GET['logout'])) {
    logout();
}

// Kode lain di halaman users/index.php
// ...
// Koneksi ke database

// Mendapatkan nama pengguna yang login
$nama_pengguna = $_SESSION['nama'];
// Query untuk mengambil data saldo berdasarkan nama pengguna
$query = "SELECT no_tabungan, saldo, nama FROM data_tabungan WHERE nama = '$nama_pengguna'";
$result = mysqli_query($config, $query);
// Ambil data dari hasil query
$row = mysqli_fetch_assoc($result);
// Tutup koneksi database
mysqli_close($config);
?>

<!doctype html>
<html lang="en">
<head >
	<style>
		.custom-rounded {
  border-radius: 50px; /* Sesuaikan nilai sesuai keinginan */
}
		.bg-1 {
    background-color: #2C3639;
  }
  
  
  .bg-2 {
    background-color: #3F4E4F; /* Contoh warna merah */
  }


  .bg-3 {
    background-color: #A27B5C; /* Contoh warna merah */
  }

  .bg-4 {
    background-color: #DCD7C9; /* Contoh warna merah */
  }
</style>
<body class="bg-3"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <nav class="navbar navbar-dark bg-1 fixed-start">
	<div class="container-fluid">
    <a class="navbar-toggler " href="index.php" aria-label="Toggle navigation">
    KEMBALI </a>   
	</div>
  </nav>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Login & Logout PHP</title>
<body>
	<br><br>
	<div class="container rounded ">
		<div class="row">
				<div class="card-body custom-rounded bg-1">
					<div class="card-title text-center text-white">
						<br>
						<h1> Profil Kamu</h1>
					</div>
					<div class="card-body custom-rounded bg-4">
						
 <br><br><br> 
 <div class="card-title text-center text-dark">
<h3>Selamat datang di profil Anda,    <?php echo $_SESSION['nama'];  ?>  </h3>
 			
<h3>Terakhir Login: <?php echo $_SESSION['terakhir_login']; ?> </h3>
<br><br>
<a href="../logout.php ">Logout</a><br><br><br><br> 
</div>
					</div>			 
			</div>
		</div>
	</div>
</body>
</head>
</html>
 
 