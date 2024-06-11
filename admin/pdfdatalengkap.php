<?php include 'koneksi.php' ;?>
<?php
session_start();

// Periksa apakah pengguna sudah login dan memiliki peran admin
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true || $_SESSION['role'] !== 'admin') {
    // Jika tidak, redirect ke halaman login
    header("Location: ../index.php");
    exit();
}

// memanggil library FPDF
require( '../fpdf/fpdf.php');
 
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA SISWA LENGKAP',0,0,'C');
$pdf->Cell(10,15,'NISN',1,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(20,7,'NISN',1,0,'C');
$pdf->Cell(25,7,'NO TABUNGAN',1,0,'C');
 
$pdf->Cell(70,7,'NAMA',1,0,'C');
$pdf->Cell(30,7,'TANGGAL LAHIR',1,0,'C');
$pdf->Cell(30,7,'NOMOR TELEPON',1,0,'C');
$pdf->Cell(30,7,'SALDO',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($config,"SELECT  * FROM data_lengkap");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(20,6, $d['nisn'],1,0);
  $pdf->Cell(25,6, $d['no_tabungan'],1,0);
  $pdf->Cell(70,6, $d['nama'],1,0);
  $pdf->Cell(30,6, $d['tanggal_lahir'],1,0);
  $pdf->Cell(30,6, $d['no_telp'],1,0);  
  $pdf->Cell(30,6, $d['saldo'],1,1);
   
   
}
 
$pdf->Output();
 
?>