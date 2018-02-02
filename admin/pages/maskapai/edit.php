<?php ob_start();
include "koneksi.php";
$id   	=$_POST['id'];
$nama   = $_POST['nama'];
$kode   = $_POST['kode'];
$deskripsi  = $_POST['deskripsi'];
$seat   = $_POST['seat'];
$id_type   = $_POST['id_type'];

$query=mysql_query("UPDATE transport set nama='$nama', kode='$kode', deskripsi='$deskripsi', seat='$seat', id_type='$id_type' where id='$id'");
header('location:index.php');
?>