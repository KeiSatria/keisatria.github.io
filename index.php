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
  <nav class="navbar navbar-dark bg-1 fixed-top">
	<div class="container-fluid">
	  <a class="navbar-brand active" aria-current="page"" href="admin1.php">Tabungan Siswa</a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
		<div class="offcanvas-header">
		  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">I N F O</h5>
		  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
		 
	 LOGIN DULU YAAA
		</div>
	  </div>
	</div>
  </nav>
<?php
session_start();
?>
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
<br><br>
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
						<h1>Login Form</h1>
					</div>
					<div class="card-body">
						<form action="process.php" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">

							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>

							<div style="display: flex; justify-content: space-between; align-items: center;">
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div></head>
</body>