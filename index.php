<?php
include('admin/pages/rute/koneksi.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flight Ticket Booking a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='css/1.css' rel='stylesheet' type='text/css'>
	<link href='css/2.css' rel='stylesheet' type='text/css'>

</head>
<body>

	<div class="pala">












		<h1>
			Flight Ticket Booking

		</h1>
		<div class="main-agileinfo">
			<div class="sap_tabs">			
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><span>Cari Rute</span></li>			
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content roundtrip">
							<form action="index.php" method="get">
								<div class="from">
									<h3 class="labelon">Keberangkatan</h3>
									<input type="text" name="city" class="city1" placeholder="Kota Keberangkatan">
								</div>
								<div class="to">
									<h3 class="labelon">Tujuan</h3>
									<input type="text" name="city" class="city2" placeholder="Kota Tujuan">
								</div>
								<div class="clear"></div>
								<div class="date">
									<div class="depart">
										<h3 class="labelon">Depart</h3>
										<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									</div>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
								<input type="submit" value="Search Flights">
								<a href="masuk.php">masuk</a>
							</form>						
						</div>		
					</div>						
				</div>
			</div>
		</div>

		<!--script for portfolio-->
		<script src="js/jquery.min.js"> </script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!--//script for portfolio-->
		<!-- Calendar -->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
			});
		</script>
		<!-- //Calendar -->
		<!--quantity-->
		<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
		</script>
		<!--//quantity-->
		<!--load more-->
		<script>
			$(document).ready(function () {
				size_li = $("#myList li").size();
				x=1;
				$('#myList li:lt('+x+')').show();
				$('#loadMore').click(function () {
					x= (x+1 <= size_li) ? x+1 : size_li;
					$('#myList li:lt('+x+')').show();
				});
				$('#showLess').click(function () {
					x=(x-1<0) ? 1 : x-1;
					$('#myList li').not(':lt('+x+')').hide();
				});
			});
		</script>
		<!-- //load-more -->


	</div>
</body>
</html>