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

<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Hasil Pencarian</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="admin/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 
<style type="text/css">

.inp{
  padding: 15px 20px;
}
.autol{
  height: 35px;
  width: 100%;
  background-color: #ffffff;
  color: #565656;
  font-family: 'Rubik', sans-serif;
  font-size: 1rem;
  line-height: 1.43;
  min-height: 2.1em;
  padding: 5px;
  border: 0;
  border-radius: 0;
}
.lab{
  color: white;
}
.subm{
  padding: 10px 5px;
}
td{
  padding: 20px 30px;
}
</style>



</head>
<body>
  <section class="menu cid-qIKXjbD6S5" once="menu" id="menu1-w">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="menu-logo">
        <div class="navbar-brand">
          <span class="navbar-logo">
            <a href="index.php">
             <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
           </a>
         </span>
         <span class="navbar-caption-wrap">
          <a class="navbar-caption text-white display-4" href="index.php">
            PROVEL.com
          </a>
        </span>
      </div>
    </div>
  </nav>
</section>







































<div class="nggo" style="background-color:skyblue; padding: 100px 30px 30px 30px;">

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
        <input type="date" name="caritanggal" size="30" class="caritujuan autol form-control">
      </div>
      <div class="subm">
        <input type="submit" value="Cari" class="btn btn-primary">
      </div>
    </div>
  </form>
</div>




















<!--       <?php
      $query=mysql_query("SELECT * from rute, transport where rute.idtransport = transport.id order by harga limit 4;");
      while($var=mysql_fetch_array($query)){
        ?>

        <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
          <div class="plan-header text-center pt-5">
            <h3 class="plan-title mbr-fonts-style display-5">
              <?php

              echo "$var[dari]-$var[tujuan]";

              ?>
            </h3>
            <div class="plan-price">
              <span class="price-value mbr-fonts-style display-5">
                Rp.
              </span><br>
              <span class="price-figure mbr-fonts-style display-2">
                <?php

                echo "$var[harga]";

                ?>
              </span><br>
              <small class="price-term mbr-fonts-style display-7">
               <?php

               echo "<b>$var[nama]</b>";

               ?>
             </small>
           </div>
         </div>
         <div class="plan-body pb-5">
          <div class="plan-list align-center">
            <ul class="list-group list-group-flush mbr-fonts-style display-7">
              <li class="list-group-item">
                <?php
                echo "$var[jam]";
                ?><br>
                Bagasi 
                <?php
                echo "$var[bagasi]";
                ?><br>
                Jarak kursi
                <?php
                echo "$var[jarak]";
                ?>
              </li>
              <li class="list-group-item">

              </li>
            </ul>
          </div>
          <div class="mbr-section-btn text-center pt-4">
            <?php echo"<a class='btn btn-primary display-4' href='pesan.php?id=$var[id]'>Pesan</a>"?> 
          </div>
        </div>
      </div>

      <?php
    }
    ?> -->
    <div class="backdua" style="margin: 20px 40px 20px 40px; background-color: white;">

     <?php 
     if(isset($_GET['caridari'])){
      $caridari = $_GET['caridari'];
      $caritujuan = $_GET['caritujuan'];
      $caritanggal = $_GET['caritanggal'];
      $data = mysql_query("SELECT rute.id, rute.tanggal, rute.dari, rute.tujuan, rute.jam, rute.harga, transport.nama, transport.logo from rute, transport where rute.dari like '".$caridari."' and rute.tujuan like '".$caritujuan."' and rute.idtransport = transport.id and rute.tanggal like '".$caritanggal."' order by rute.harga");  
      while($var = mysql_fetch_array($data)){
        ?>
        <!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit --><!-- yang di edit -->
        <div class="row" style="background-color: white;padding: 10px;">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?php echo $var['nama']; ?></div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $var['nama']; ?></div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><?php echo $var['nama']; ?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Rp. <?php echo $var['harga']; ?></div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><?php echo"<a href='pesan.php?id=$var[id]' style='background-color:skyblue;padding:7px 12px;border-radius:7px;color:white;'>Pesan</a>"?></div>
        </div>
        <p style="padding-left: 10px;"><?php echo $var['jam']; ?> - <?php echo $var['jam']; ?></p>
        <hr>
        <?php } ?>
        <?php 
      }

      ?>

    </div>







      <script src="assets/web/assets/jquery/jquery.min.js"></script>
      <script src="assets/popper/popper.min.js"></script>
      <script src="assets/tether/tether.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/smoothscroll/smooth-scroll.js"></script>
      <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
      <script src="assets/playervimeo/vimeo_player.js"></script>
      <script src="assets/parallax/jarallax.min.js"></script>
      <script src="assets/dropdown/js/script.min.js"></script>
      <script src="assets/theme/js/script.js"></script>
      <script src="assets/formoid/formoid.min.js"></script>
      <script src="admin/bower_components/select2/dist/js/select2.full.min.js"></script>
      <script src="admin/plugins/input-mask/jquery.inputmask.js"></script>
      <script src="admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
      <script src="admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
      <script src="admin/bower_components/moment/min/moment.min.js"></script>
      <script src="admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
      <script src="admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <!-- bootstrap color picker -->
      <script src="admin/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
      <!-- bootstrap time picker -->
      <script src="admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
      <!-- SlimScroll -->
      <script src="admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <!-- iCheck 1.0.1 -->
      <script src="admin/plugins/iCheck/icheck.min.js"></script>
      <!-- FastClick -->
      <script src="admin/bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="admin/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="admin/dist/js/demo.js"></script>
      <!-- Page script -->
      <script>
        $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>


</body>
</html>

