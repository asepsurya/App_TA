<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $tanggal=date("d-m-Y");
  $kode_petugas = $_POST['id_petugas'];
  $nm_petugas= $_POST['nm_petugas'];
  $alamat = $_POST ['alamat'];
  $gender = $_POST['gender'];
  $no_kontak = $_POST['no_kontak'];
  $jabatan = $_POST['jabatan'];
  

   // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tbl_petugas VALUES ('$tanggal','$kode_petugas','$nm_petugas', '$alamat', '$gender','$no_kontak','$jabatan')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));

}

 
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../../view/data_petugas.php");
?>
