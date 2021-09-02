<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input1'])) {

	// membuat variabel untuk menampung data dari form
  $tanggal = $_POST['tanggal'];
  $tgl_cek = $_POST ['tgl_berikutnya'];
  $nama_pmlk = $_POST['nama_pmlk'];
  $alamat = $_POST['alamat'];
  $kode = $_POST['kode'];
  $status = $_POST['nama_pemeriksa'];
  $hasil=$_POST['hasil'];
  $tgl_masuk=$_POST['tgl_masuk'];
  $alat=$_POST['alat'];
  $kode_pemilik = $_POST['kode_pemilik'];
   // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tbl_pemeriksaan VALUES ('','$kode','$tanggal', '$tgl_cek', '$nama_pmlk','$status','50','$hasil')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));

}

 
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../../view/pemeriksaan.php?id=$kode_pemilik&tanggal=$tgl_masuk&alat=$alat&nm_petugas=$status");
?>
