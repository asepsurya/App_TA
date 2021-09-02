<?php
include "koneksi.php";
$lama = 3;
$aa=date('d-m-Y');
$id = $_GET['id'];
$a=$_GET['tgl'];
$b=$_GET['nm_alat'];
$id_pemeriksaan = $_GET['no_pemeriksaan'];
$query = "UPDATE tbl_pemeriksaan SET ";
$query .= "tgl_pengecekan_akhir = '$aa'";
 $query .= "WHERE no = '$id_pemeriksaan'";
$result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_error($link).
       " - ".mysqli_error($link));
  }

//lakukan redirect ke halaman index.php
header("location:../view/pemeriksaan.php?id=".$id."&tanggal=".$a."&alat=".$b."");

?>