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
  .content {
    width: 80%;
    margin: 0 auto;
    margin-top: 50px;
  }
  .tt-hint,
  .caridari,.caritujuan, .btn {
    border: 2px solid #CCCCCC;
    border-radius: 8px 8px 8px 8px;
    font-size: 24px;
    height: 45px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 400px;
  }
  .tt-dropdown-menu {
    width: 400px;
    margin-top: 5px;
    padding: 8px 12px;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px 8px 8px 8px;
    font-size: 18px;
    color: #111;
    background-color: #F1F1F1;
  }
</style>
<script>
  $(document).ready(function() {

    $('input.caridari').typeahead({
      name: 'caridari',
      remote: 'mysql.php?query=%QUERY'

    });

  })
  $(document).ready(function() {

    $('input.caritujuan').typeahead({
      name: 'caritujuan',
      remote: 'mysql.php?querya=%QUERY'

    });

  })
</script>
</head>

<body>
  <div class="content">

    <form action="hasil.php" method="get">
      <h1>Cari rute</h1>
      <input type="text" name="caridari" size="30" class="caridari" placeholder="Masukan kota keberangkatan">
      <input type="text" name="caritujuan" size="30" class="caritujuan" placeholder="Masukan kota tujuan">
      <input type="submit" value="Cari" class="btn btn-primary">
    </form>
  </div>
  <table border="0" style="margin: 10px;">

   

    </body>

    </html>