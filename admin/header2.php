<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);;?>
<?php include 'koneksi.php' ;?>
 <?php

// Koneksi Database //
 
// Koneksi Database //

// Input Data Siswa Ke table Siswa //
	if( isset($_POST['submit']) ){
		$nik 			= $_POST['no_tabungan'];
		$nama   		= $_POST['nama'];
		$tanggal_lahir  = $_POST['saldo'];
	 
		 
		$query  = "insert into data_tabungan (no_tabungan, nama, saldo ) value ('$nik', '$nama', '$tanggal_lahir' )";
		  $result = mysqli_query($config, $query);
		  if(!$result){
				die ("Query gagal dijalankan: ".mysqli_errno($config).
								 " - ".mysqli_error($config));
		  } else {
			  header('Location: ../admin/admin2.php');
		  }
	}
// Input Data Siswa Ke table Siswa //
if( isset($_POST['edit']) ){
	$no			    = $_POST['no_tabungan'];
	$nisn 			= $_POST['saldo'];
	$nama   		= $_POST['nama'];
	 
	$query  = "UPDATE data_tabungan SET no_tabungan = '$no',saldo = '$nisn', nama = '$nama'";
	  $query .= "WHERE no_tabungan = '$no'";
	  $result = mysqli_query($config, $query);
	  if(!$result){
			die ("Query gagal dijalankan: ".mysqli_errno($config).
							 " - ".mysqli_error($config));
	  } else {
		  header('Location: ../admin/admin2.php');
	  }
}
	
	if(isset($_GET['delete'])){
		$delete= $_GET['delete'];
		delete_data($config, $delete);
	}
	function delete_data($config, $delete){
		$query="DELETE from data_tabungan WHERE no_tabungan=$delete";
		$result = mysqli_query($config, $query);
		  if(!$result){
				die ("Query gagal dijalankan: ".mysqli_errno($config).
								 " - ".mysqli_error($config));
		  } else {
			  header('Location: ../admin/admin2.php');
		  }
	}
?>

<!DOCTYPE html>
<html>
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><style>
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
<title>Tabungan Siswa - Admin</title>
<head>

<!--Load CSS Bootstrap (Perlu Internet)-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--Load CSS Bootstrap (Perlu Internet)-->

</head>
</head>
<body class="m-3">

<div class="container-fluid">
	<div class="sticky-top card shadow p-3 mb-3 bg-2 rounded">
      	<h1 class="text-center m-3 text-black">Data Tabungan Siswa</h1>
        <div class="ms-3 me-3 pb-3">
		
			<!--Form Input Siswa-->
        	<form method="POST" action="">
            	<div class="row g-3">
                	<div class="col">
                    	<div class="mb-3">
                			<label class="form-label text-black">No Tabungan</label>
                  			<input name="no_tabungan" type="varchar" class="form-control form-control-sm" required>
                        </div>
                	</div>
                	<div class="col">
						<div class="mb-3">
                			<label class="form-label text-black">Nama</label>
                  			<select name="nama" type="varchar" class="form-control form-control-sm" required>
							  <option value="">...</option>
							<?php

							$query = mysqli_query($config, "SELECT * FROM siswa") or die (mysqli_error($config));
							while($data = mysqli_fetch_array($query)){
								echo"<option value =$data[nama]> $data[nisn].$data[nama]</option>";

							}
							?>
						</select>
					 
                        
                        </div>
                	</div>
                	<div class="col">
                    	<div class="mb-3">
                			<label class="form-label text-black">Saldo</label>
                  			<input name="saldo" type="varchar" class="form-control form-control-sm" required>
                        </div>
                	</div>
                	 
                	</div>
              	</div>
              	<button type="submit" name="submit" class="custom-button btn-sm mt-2 text-white">Tambah Data</button>
            </form>
			<!--Form Input Siswa-->
			
        </div>
    </div>