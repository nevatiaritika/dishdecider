<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Select Pulses</title>
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
			background-image: url(http://foodswol.com/wp-content/uploads/2014/05/frosted_sugar_cookie_lrg.jpg);
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
				<a class="codrops-icon codrops-icon-prev" href="jain-cereals.php"><span>Back to base ingredients</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="index.html"><span>Home</span></a></span>
			</div>
			<section>
				<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<h2>Check your pulses stock!</h2>
					<ul>
						<li style="position: absolute; left: 600px;"><input id="cb01" name="cb01" type="checkbox"><label for="cb10">Beans</label></li>
						<li><input id="cb02" name="cb02" type="checkbox"><label for="cb11">Moong</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb03" name="cb03" type="checkbox"><label for="cb12">Black Dal</label></li>
						<li><input id="cb04" name="cb04" type="checkbox"><label for="cb13">Bengal Gram</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb05" name="cb05" type="checkbox"><label for="cb13">Green Gram</label></li>
						<li><input id="cb06" name="cb06" type="checkbox"><label for="cb13">Barley</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb07" name="cb07" type="checkbox"><label for="cb13">Sprouts</label></li>
						<li><input id="cb08" name="cb08" type="checkbox"><label for="cb13">Chick Peas</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb09" name="cb09" type="checkbox"><label for="cb13">Kidney Beans</label></li>
						<li><input id="cb10" name="cb10" type="checkbox"><label for="cb13">Baked Beans</label></li>
					</ul>
					<right>
					<p align="right"><b>Move to next step: Vegetables</b></p>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; float: right" onClick="location.href='vegetables.php'">
					</right>
				</form>
			</section>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>