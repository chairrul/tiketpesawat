<?php
include 'admin/pages/rute/koneksi.php';

$id=$_GET['id'];
$query=mysql_query("select * from rute where id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>pemesanan</title>
</head>
<body>
	
	<h1>data pesanan</h1>
	<?php
	while($row=mysql_fetch_array($query)){
		?>
		Waktu:
		<input type="hidden" name="id" value="<?php echo $row['id'];?>"> 
		<?php echo $row['jam'];?><br>
		keberangkatan:
		<?php echo $row['dari'];?><br>
		tujuan:
		<?php echo $row['tujuan'];?><br>
		harga:
		<?php echo $row['harga'];?><br>

		<?php } ?>




		</body>
		</html>