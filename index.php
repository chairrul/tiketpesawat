<!-- <?php
session_name('LoginForm');
@session_start();

error_reporting(0);
include("config.php");

?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Flight Ticket Booking a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='css/1.css' rel='stylesheet' type='text/css'>
	<link href='css/2.css' rel='stylesheet' type='text/css'>

</head>
<body>







<!-- 
	<?php
	$error = '';
	if(isset($_POST['is_login'])){
		$sql = "SELECT * FROM ".$SETTINGS["USERS"]." WHERE `email` = '".mysql_real_escape_string($_POST['email'])."' AND `password` = '".mysql_real_escape_string($_POST['password'])."'";
		$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysql_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user;
			$query = " UPDATE ".$SETTINGS["USERS"]." SET last_login = NOW() WHERE id=".$user['id'];
			mysql_query ($query, $connection ) or die ('request "Could not execute SQL query" '.$query);
		}
		else{
			$error = 'Wrong email or password.';
		}
	}
	
	if(isset($_GET['ac']) && $_GET['ac'] == 'logout'){
		$_SESSION['user_info'] = null;
		unset($_SESSION['user_info']);
	}
	?>
	<?php if(isset($_SESSION['user_info']) && is_array($_SESSION['user_info'])) { ?>

	<form id="login-form" class="login-form" name="form1">

		<div id="form-content">
			<div class="welcome">
				<?php echo $_SESSION['user_info']['name']  ?>, you are logged in. 
				<br /><br />
				<?php echo $_SESSION['user_info']['content']  ?>
				<br /><br />
				<a href="index.php?ac=logout" style="color:#3ec038">Logout</a>
			</div>	
		</div>

	</form>

	<?php } else { ?>
	<form name="form1" method="post" action="index.php">
		<input type="hidden" name="is_login" value="1">
			
			<input class="city1" name="email" type="email" placeholder="email">


			<input class="city2" name="password" type="password" placeholder="Password">



		<?php if($error) { ?>
		<em>
			<label class="err" for="password" generated="true" style="display: block;"><?php echo $error ?></label>
		</em>
		<?php } ?>

		<input name="submit" type="submit" value="Submit"/>

		<div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
	</form>
	<?php } ?>


 -->









	<h1>
		Flight Ticket Booking

	</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>			
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="#" method="post">
							<div class="from">
								<h3>From</h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
							</div>
							<div class="to">
								<h3>To</h3>
								<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
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



</body>
</html>