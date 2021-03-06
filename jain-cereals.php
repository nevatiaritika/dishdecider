<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Select Cereals</title>
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
			background-image: url(http://img3.goodfon.su/wallpaper/big/2/d9/gamburger-bulka-kunzhut.jpg);
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
				<a class="codrops-icon codrops-icon-prev" href="veg-nonveg.php"><span>Back to choosing style</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="index.html"><span>Home</span></a></span>
			</div>
			<section>
				<form class="ac-custom ac-checkbox ac-boxfill" autocomplete="off">
					<h2>What base ingredients do you have right now?</h2>
					<ul>
						<li style="position: absolute; left: 600px;"><input id="cb01" name="cb01" type="checkbox"><label for="cb10">Rice</label></li>
						<li><input id="cb02" name="cb02" type="checkbox"><label for="cb11">Wheat</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb03" name="cb03" type="checkbox"><label for="cb12">Jowar</label></li>
						<li><input id="cb04" name="cb04" type="checkbox"><label for="cb13">Bajra</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb05" name="cb05" type="checkbox"><label for="cb13">Paneer</label></li>
						<li><input id="cb06" name="cb06" type="checkbox"><label for="cb13">Noodles</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb07" name="cb07" type="checkbox"><label for="cb13">Pasta</label></li>
						<li><input id="cb08" name="cb08" type="checkbox"><label for="cb13">Bread</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb09" name="cb09" type="checkbox"><label for="cb13">Chocolate</label></li>
						<li><input id="cb10" name="cb10" type="checkbox"><label for="cb13">Oats</label></li>
					</ul>
					<right>
					<p align="right"><b>Next step: Pulses</b></p>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; float: right" onClick="location.href='pulses.php'">
					</right>
				</form>
			</section>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>