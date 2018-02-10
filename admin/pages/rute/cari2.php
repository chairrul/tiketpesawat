<?php
include 'koneksi.php';
?>
<form action="cari.php" method="get">
  <label>Cari :</label>
  <input type="text" name="caridari" placeholder="keberangkatan" required>
  <input type="text" name="caritujuan" placeholder="tujuan" required>
  <input type="submit" value="Cari">
</form>
<style type="text/css">
  td{
    padding: 10px 20px;
  }
</style>
<table border="0" style="margin: 10px;">
  
  <?php 
  if(isset($_GET['caridari'])){
    $caridari = $_GET['caridari'];
    $caritujuan = $_GET['caritujuan'];
    $data = mysql_query("select * from rute where dari like '".$caridari."' and tujuan like '".$caritujuan."' order by harga");  
    while($d = mysql_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d['dari']; ?></td>
        <td><?php echo $d['tujuan']; ?></td>
        <td><?php echo $d['jam']; ?></td>
        <td>Rp. <?php echo $d['harga']; ?></td>
        <td><a href="#">Pesan</a></td>
      </tr>
      <?php } ?>
    </table>

    <?php }  ?>