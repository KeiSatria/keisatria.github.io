<?php
session_start();

// Periksa apakah pengguna sudah login dan memiliki peran admin
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true || $_SESSION['role'] !== 'admin') {
    // Jika tidak, redirect ke halaman login
    header("Location: ../index.php");
    exit();
}

// Halaman admin/index.php
// ... (Kode halaman admin)
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
  .custom-button {
  background-color: #41644A; /* Warna latar belakang biru */
  color: #fff; /* Warna teks putih */
  border: none; /* Tanpa border */
  padding: 10px 20px; /* Padding tombol */
  border-radius: 5px; /* Bulatan sudut tombol */
  cursor: pointer;
  text-decoration: none;
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

 <br><br><br>
  <?php include 'header.php' ;
  ?>
    <div class="card-title text-center">
    <a href="pdfsiswa.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT DATA INI</a>
</div>
    
    	<input type="text-white" class="form-control form-control-sm   " placeholder="Cari Berdasarkan No Absen..." id="getSearch" onkeyup="getFunction()">
		<!--Table Data Siswa-->
		<table id="getTable" class="table table-bg-3 bg-3 table-stripped">

        	<thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NISN</th>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Pilihan</th>
            </tr>
          </thead>
          <tbody >
		  
			<!--Menampilkan Data Siswa-->
			<?php 
      $no = 1;
				$data = mysqli_query($config,"select * from siswa order by nama asc");
				while($tampilkan = mysqli_fetch_array($data)){
			?>
            <tr>
              <td><?php echo  $no++; ?></td>
               
              <td><?php echo $tampilkan["nisn"] ;?></td>
              <td><?php echo $tampilkan["nama"] ;?></td>
              <td><?php echo $tampilkan["tanggal_lahir"] ;?></td>
              <td><?php echo $tampilkan["no_telp"] ;?></td>
              <td>
             
				<a href="edit.php?id=<?php echo $tampilkan["nisn"] ;?>" class="  custom-button btn-sm text-white">Ubah</a>
				<a href="admin1.php?delete=<?php echo $tampilkan["nisn"] ;?>"onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?');" class="custom-button btn-sm text-white">Hapus</a>
         
			  </td>
            </tr>
			<?php 
			}
			?>
       
			<!--Menampilkan Data Siswa-->
			
          </tbody>
        </table>
		<!--Table Data Siswa-->
		
 
  </head>
<?php include 'footer.php' ;?></body>