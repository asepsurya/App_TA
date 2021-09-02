<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "dbtera";
$connect    = mysqli_connect($host, $user, $password, $database);
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF();
$pdf->AddPage('L','A4');
$tgl=date('Y/m/d');
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Image('../img/logo2.png',75,8,20,19);
$pdf->Cell(300,6,'LAPORAN TERA ULANG ALAT UTTP',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(300,6,'UPTD METROLOGI LEGAL KOTA BANJAR',0,1,'C');
$pdf->Ln(1);	
$pdf->SetFont('Arial','B',8);
$pdf->Cell(300,6,'Jl.Brigjen M.Isa. SH Komplek Perkantoran Purwaharja Kota Banjar',0,1,'C');
$pdf->SetLineWidth(0.3);	
$pdf->Line(10,28,262,28);
$pdf->setFont('Arial','B',12);
$pdf->Cell(300,6,'Tanggal Cetak '.$tgl,0,1,'L');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,3,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'NO',1,0,'C');
$pdf->Cell(25,6,'TANGGAL',1,0,'C');
$pdf->Cell(35,6,'NAMA PETUGAS',1,0,'C');
$pdf->Cell(35,6,'NAMA PEMILIK',1,0,'C');
$pdf->Cell(29,6,'ALAMAT',1,0,'C');
$pdf->Cell(31,6,'JENIS UTTP',1,0,'C');
$pdf->Cell(35,6,'STD KEKUATAN',1,0,'C');
$pdf->Cell(20,6,'NO SERI',1,0,'C');
$pdf->Cell(35,6,'HSL PENGECEKAN',1,1,'C');
include '../asset/koneksi.php';
$no = 0;
$mahasiswa = mysqli_query($connect, "select * from tbl_pengecekan");
while ($row = mysqli_fetch_array($mahasiswa)){
	$no++;
    $pdf->Cell(8,6,$no,1,0,'C');
    $pdf->Cell(25,6,$row['tanggal'],1,0,'C');
    $pdf->Cell(35,6,$row['nm_petugas'],1,0,'C');
    $pdf->Cell(35,6,$row['nm_pemilik'],1,0,'C');
    $pdf->Cell(29,6,$row['alamat'],1,0,'C');
    $pdf->Cell(31,6,$row['jenisuttp'],1,0,'C'); 
    $pdf->Cell(35,6,$row['standar_kekuatan'],1,0,'C'); 
    $pdf->Cell(20,6,$row['noseri'],1,0,'C');
    $pdf->Cell(35,6,$row['hasil_pengecekan'],1,1,'C');  
}

$pdf->Ln(20);	
$pdf->Cell(250,6,'Kota Banjar, '.$tgl,0,1,'R');
$pdf->Cell(255,6,'Kepala UPTD Metrologi Legal',0,1,'R');
$pdf->Ln(20);
$pdf->Cell(246,6,'Heri Suherman S.H',0,1,'R');
$pdf->Cell(252,6,'NIP.196205071983021003',0,1,'R');
$pdf->SetY(-20);
$pdf->Cell(-0,-9,'Cetak Tanggal   : '.$tgl,0,1,'L');
$pdf->Cell(-0,-10,'Di Cetak Oleh : _____________________ ',0,1,'L');
$pdf->Output();


?>