
<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbtera";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$petugas = $_POST['petugas'];
$nama = $_POST['nama'];
$alamat	= $_POST['alamat'];
$jenisuttp	= $_POST['jenisuttp'];
$kekuatan = $_POST['kekuatan'];
$noseri = $_POST['noseri'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"UPDATE tbl_pengecekan SET alamat='$alamat',tanggal = '$tanggal',nm_petugas = '$petugas', nm_pemilik = '$nama', jenisuttp='$jenisuttp',standar_kekuatan = '$kekuatan',noseri = '$noseri',hasil_pengecekan = '$jumlah' WHERE no = '$id'");
header("location:../../view/tabel.php");   
  


?>


