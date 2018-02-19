<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$jam   = $_POST['jam'];
$dari   = $_POST['dari'];
$tujuan  = $_POST['tujuan'];
$harga   = $_POST['harga'];
$tanggal   = $_POST['tanggal'];
$idtransport   = $_POST['idtransport'];

mysql_query("INSERT INTO rute(id,jam,dari,tujuan,harga,tanggal,idtransport)
VALUE('$id','$jam','$dari','$tujuan','$harga','$tanggal','$idtransport')")or die(mysql_error());
header('location:index.php');
?>