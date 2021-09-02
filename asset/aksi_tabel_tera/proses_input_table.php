<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $tanggal = $_POST['tanggal'];
  $petugas = $_POST ['petugas'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenisuttp = $_POST['jenisuttp'];
  $kekuatan = $_POST['kekuatan'];
  $noseri = $_POST['noseri'];
  $jumlah = $_POST['jumlah'];


  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tbl_pengecekan VALUES (NULL,'$tanggal', '$petugas', '$nama', '$alamat', '$jenisuttp','$kekuatan','$noseri','$jumlah','')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../../view/tabel.php");
?>
