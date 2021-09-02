<?php
$koneksi = mysqli_connect("localhost","root","","dbtera");
$id=$_GET['id_alat'];
mysqli_query($koneksi,"DELETE FROM alat WHERE id_alat='$id'");
header("location:../../view/alat.php");
?>