<?php include 'koneksi.php' ;?>
<?php
    session_start();
	if (!isset($_SESSION['login']) || $_SESSION['login'] !== true || $_SESSION['role'] !== 'admin') {
		// Jika tidak, redirect ke halaman login
		header("Location: ../index.php");
		exit();
	}
    ?>
<head><style>
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
	 
	  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		
	  </button>
	  <div class="btn-group dropstart">
  <button type="button" class="btn btn-secondary  " data-bs-toggle="dropdown" aria-expanded="false">
  <h5>HAI <?php 
    $nama = $_SESSION['nama'];
    $nama_parts = explode(' ', $nama); // Split the full name by space
    echo $nama_parts[0]; // Output the first part (first name)
?></h5> 
  <ul class="dropdown-menu">
   
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="profil.php">Profil</a></li>
    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
     
  </ul>
</div>
	  <div class="offcanvas offcanvas-start	text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
		<div class="offcanvas-header">
		  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
		  <button class="navbar-toggler"  type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"> <span class="navbar-toggler-icon"></span></button>
		</div>
		<div class="offcanvas-body">
		  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="admin3.php">Data Siswa Lengkap</a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle active" aria-current="page"" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Menu Edit
			  </a>
			  <ul class="dropdown-menu dropdown-menu-dark">
				<li><a class="dropdown-item  " href="admin1.php">Data Siswa</a></li>
				<li><a class="dropdown-item  " href="admin2.php">Data Tabungan </a></li>
                <li><a class="dropdown-item  " href="register.php">Buat Akun User Baru </a></li>  
			  </ul>
			</li>
		  </ul>
		  <a href="../logout.php">Logout</a>
		</div>
	  </div>
	</div>
  </nav>
 
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Tabungan Siswa</title>
</head>

<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">
				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>
				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register Form</h1>
    					</div>
    					<div class="card-body">
    						<form action="process-register.php" method="post">
    							<div class="form-group">
    								<label for="username">Nama Lengkap</label>
    								<input type="text" name="nama" class="form-control" id="name" value="<?php echo @$_SESSION['nama']?>" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
    							</div>
    							<div class="form-group">
    								<label for="password">Konfirmasi Password</label>
    								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="<?php echo @$_SESSION['password_confirmation']?>"  placeholder="Password">
    							</div>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div></head>
</body>

 
