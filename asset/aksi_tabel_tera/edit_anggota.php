<?php 
 
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbtera";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection

  $kode_petugas = $_POST['id_petugas'];
  $nm_petugas= $_POST['nm_petugas'];
  $alamat = $_POST ['alamat'];
  $gender = $_POST['gender'];
  $no_kontak = $_POST['no_kontak'];
  $jabatan = $_POST['jabatan'];
 
mysqli_query($koneksi,"UPDATE tbl_petugas SET nm_petugas='$nm_petugas', alamat='$alamat', gender='$gender',telp='$no_kontak',jabatan='$jabatan' WHERE kode_petugas='$kode_petugas'");
 
header("location:../../view/data_petugas.php?pesan=update");

?>