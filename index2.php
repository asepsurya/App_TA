<?php
$tgl1 = "2021-04-23";// pendefinisian tanggal awal
$tgl2 = date('Y-m-d', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
echo $tgl2; //print tanggal
?>

<?php
$tgl_now=date("Y-m-d");
$tgl_exp="2021-04-30";//tanggal expired
if ($tgl_now >=$tgl_exp )
{
 echo"<center><h1>web expired</h1>
 <h3>Silahkan hubungi team olehmoco<h3></center>";
}
else
{
?>
<!--ISIKAN SCRIPT INDEXNYA DISINI-->4535345
<?php
}
?>