<?php
include 'admin/pages/rute/koneksi.php';
?>
<div class="nggo" style="background-color:rgba(57, 154, 186, 0.7); padding: 30px 30px 30px 30px;">
  <form action="hasil.php" method="get">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <div class="form-group">
          <label class="lab">Kota Keberangkatan</label>
          <select class="form-control select2" style="width: 100%;" name="caridari" class="caridari autol">
            <?php
            $query=mysql_query("SELECT DISTINCT dari from rute;");
            while($var=mysql_fetch_array($query)){
              echo "<option>$var[dari]</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <div class="form-group">
          <label class="lab">Kota Tujuan</label>
          <select class="form-control select2" style="width: 100%;" name="caritujuan" class="caritujuan autol">
            <optgroup disabled="">cari kota</optgroup>
            <?php
            $query=mysql_query("SELECT DISTINCT tujuan from rute;");
            while($var=mysql_fetch_array($query)){
              echo "<option>$var[tujuan]</option>";
            }
            ?>
          </select>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 inp">
        <label class="lab">Tanggal Kebrerangkatan</label>
        <input type="date" name="caritanggal" size="30" class="caritujuan autol" >
      </div>
      <div class="subm">
        <input type="submit" value="Cari" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>