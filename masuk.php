<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin/index.php");//ngelink ke halaman setelah login kemana
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>oBook.com</h1><br>
	<h3>your way to book airways</h3>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Masuk</span></li>			
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="" method="post">
							<div class="from">
								<input type="text" name="username" class="city1" placeholder="UserName" required="">
							</div>
							<div class="to">
								<input type="Password" name="password" class="city1" placeholder="Password" required="">
							</div>
							<input type="submit" name="submit" value="Masuk">
							<span><?php echo $error; ?></span>
						</form>						
					</div>		
				</div>						
			</div>
		</div>
	</div>
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
</body>
</html>