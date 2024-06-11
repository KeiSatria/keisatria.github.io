<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
<?php include 'koneksi.php' ;?>

<?php
ob_start();
// Koneksi Database //
 
// Koneksi Database //

// Input Data Siswa Ke table Siswa //
	if( isset($_POST['submit']) ){
		 
		$nisn 			= $_POST['nisn'];
		$nama   		= $_POST['nama'];
		$tanggal_lahir  = $_POST['tanggal_lahir'];
		$no_telp   		= $_POST['no_telp'];
		 
		$query  = "insert into siswa ( nisn, nama, tanggal_lahir, no_telp) value ( '$nisn', '$nama', '$tanggal_lahir', '$no_telp' )";
		  $result = mysqli_query($config, $query);
		  
		  if(!$result){
				die ("Query gagal dijalankan: ".mysqli_errno($config).
								 " - ".mysqli_error($config));
		  } else {
			  header('Location: admin1.php');
		  }
	}
// Input Data Siswa Ke table Siswa //
	if( isset($_POST['edit']) ){
		
		$nisn 			= $_POST['nisn'];
		$nama   		= $_POST['nama'];
		$tanggal_lahir  = $_POST['tanggal_lahir'];
		$no_telp   		= $_POST['no_telp'];
		$query  = "UPDATE siswa SET  nisn = '$nisn', nama = '$nama', tanggal_lahir = '$tanggal_lahir', no_telp = '$no_telp'  ";
		  $query .= "WHERE nisn = '$nisn'";
		  $result = mysqli_query($config, $query);
		  if(!$result){
				die ("Query gagal dijalankan: ".mysqli_errno($config).
								 " - ".mysqli_error($config));
		  } else {
			  header('Location: ../admin/admin1.php');
		  }
	}
	
	if(isset($_GET['delete'])){
		$delete= $_GET['delete'];
		delete_data($config, $delete);
	}
	function delete_data($config, $delete){
		$query="DELETE from siswa WHERE nisn=$delete";
		$result = mysqli_query($config, $query);
		  if(!$result){
				die ("Query gagal dijalankan: ".mysqli_errno($config).
								 " - ".mysqli_error($config));
		  } else {
		   header('Location: admin1.php');
		  }
	}
?>

<!DOCTYPE html>
<html>
<head> <style>
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
 

<!--Load CSS Bootstrap (Perlu Internet)-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--Load CSS Bootstrap (Perlu Internet)-->

 
<body class="m-3">

<div class="container-fluid">
<div class="sticky-top card shadow p-3 mb-3 bg-2 rounded">

      	<h1 class="text-center m-3 text-black">Data Siswa Yang Menabung</h1>
        <div class="ms-3 me-3 pb-3">
		
			<!--Form Input Siswa-->
        	<form method="POST" action="">
            	<div class="row g-3">
				 
                    	 
                	 
                	<div class="col">
                    	<div class="mb-3 ">
                			<label class="form-label text-black">NISN</label>
                  			<input name="nisn" type="varchar" class="form-control form-control-sm  " required>
                        </div>
                	</div>
                	<div class="col">
                    	<div class="mb-3">
                			<label class="form-label text-black">Nama</label>
                  			<input name="nama" type="varchar" class="form-control form-control-sm  " required>
                        </div>
                	</div>
                	<div class="col">
                    	<div class="mb-3">
                			<label class="form-label text-black">Tanggal Lahir</label>
                  			<input name="tanggal_lahir" type="date" class="form-control form-control-sm  " required>
                        </div>
                	</div>
                	<div class="col">
                    	<div class="mb-3">
                			<label class="form-label text-black">No Telepon</label>
                            <input name="no_telp" type="varchar" class="form-control form-control-sm  " >
                        
                        </div>
                	</div>
                	 
                	</div>
              	</div>
              	<button type="submit" name="submit" class="custom-button btn-sm mt-1 text-white">Tambah Data</button>
            </form>
			<!--Form Input Siswa-->
			
        </div>
    </div>
	</head>
 