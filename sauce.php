<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Choose your veggies</title>
		<meta name="description" content="Animated Checkboxes and Radio Buttons with SVG: Using SVG for adding some fancy 'check' animations to form inputs" />
		<meta name="keywords" content="animated checkbox, svg, radio button, styled checkbox, css, pseudo element, form, animated svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<style type="text/css">
		body {
			background-image: url(http://www.zastavki.com/pictures/640x480/2013/Food___Berries_and_fruits_and_nuts__040692_29.jpg);
			background-size: cover;
			font-family: 'Lato', Arial, sans-serif;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<img src="images/flogo-s.png">
				<a class="codrops-icon codrops-icon-prev" href="jain-cereals.php"><span>Back to pulses selection</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="index.html"><span>Home</span></a></span>
			</div>
			<section>
				<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<h2>Do we have sauces around?</h2>
					<ul>
						<li><input id="cb6" name="cb6" type="checkbox"><label for="cb6">Mayo</label></li>
						<li><input id="cb7" name="cb7" type="checkbox"><label for="cb7">Ketchup</label></li>
						<li><input id="cb8" name="cb8" type="checkbox"><label for="cb8">Schezwan</label></li>
						<li><input id="cb9" name="cb9" type="checkbox"><label for="cb9">Curd</label></li>
						<li><input id="cb9" name="cb9" type="checkbox"><label for="cb9">Lemon Juice</label></li>
					<ul>
				</form>
			</section>
			<right>
					<p align="right" style="position: absolute; right: 100px;"><b>Move to next step: Spices</b></p><br><br><br>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; position: absolute; right: 175px;" onClick="location.href='spices.php'">
					</right>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>