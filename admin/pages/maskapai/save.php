<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$nama   = $_POST['nama'];
$kode   = $_POST['kode'];
$deskripsi  = $_POST['deskripsi'];
$seat   = $_POST['seat'];
$id_type   = $_POST['id_type'];

mysql_query("INSERT INTO transport(id,nama,kode,deskripsi,seat,id_type)
VALUE('$id','$nama','$kode','$deskripsi','$seat','$id_type')")or die(mysql_error());
header('location:index.php');
?>