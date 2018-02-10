<?php
include 'admin/pages/rute/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <title>PHP MySQL Typeahead Autocomplete</title>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>

  <style>
  td{
    padding: 10px 20px;
  }
  h1 {
    font-size: 20px;
    color: #111;
  }
  
</style>

</head>

<body>
  <div class="content">

    <form accept="hasil.php" method="get">
      <h1>Cari rute</h1>
      <input type="text" name="caridari" size="30" class="caridari" placeholder="Masukan kota keberangkatan">
      <input type="text" name="caritujuan" size="30" class="caritujuan" placeholder="Masukan kota tujuan">
      <input type="submit" value="Cari" class="btn btn-primary">
    </form>
  </div>
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

    </body>

    </html>