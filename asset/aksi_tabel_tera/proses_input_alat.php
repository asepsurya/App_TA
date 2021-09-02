<?php
// memanggil file koneksi.php untuk melakukan koneksi database
// file penghubung antara database dengan php
$koneksi = mysqli_connect("localhost","root","","dbtera");

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

  // membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $rand = rand();
  $ekstensi =  array('png','jpg','jpeg','gif');
  $filename = $_FILES['foto']['name'];
  $ukuran = $_FILES['foto']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
  header("location:location:../../view/alat.php?alert=gagal_ekstensi");
}else{
  if($ukuran < 1044070){    
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/'.$rand.'_'.$filename);
    mysqli_query($koneksi, "INSERT INTO alat VALUES(NULL,'$nama','$xx')");
    header("location:../../view/alat.php?alert=berhasil");
  }else{
    header("location:../../view/alat.php?alert=gagak_ukuran");
  }
}
 }
// melakukan redirect (mengalihkan) ke halaman index.php
header("location:../../view/alat.php");
?>
