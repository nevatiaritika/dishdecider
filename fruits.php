<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Select Fruits</title>
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
			background-image: url(http://www.zastavki.com/pictures/640x480/2013/Food___Berries_and_fruits_and_nuts_Green_peas_in_the_pod_048628_29.jpg);
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
				<a class="codrops-icon codrops-icon-prev" href="vegetables.php"><span>Back to veggies</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="index.html"><span>Home</span></a></span>
			</div>
			<section>
				<form class="ac-custom ac-checkbox ac-diagonal" autocomplete="off">
					<h2>Which fruits are we stocked with?</h2>
					<ul>
						<li style="position: absolute; left: 600px;"><input id="cb01" name="cb01" type="checkbox"><label for="cb10">Mango</label></li>
						<li><input id="cb02" name="cb02" type="checkbox"><label for="cb11">Apple</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb03" name="cb03" type="checkbox"><label for="cb12">Banana</label></li>
						<li><input id="cb04" name="cb04" type="checkbox"><label for="cb13">Strawberry</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb05" name="cb05" type="checkbox"><label for="cb13">Grapes</label></li>
						<li><input id="cb06" name="cb06" type="checkbox"><label for="cb13">Watermelon</label></li>
						<li style="position: absolute; left: 600px;"><input id="cb07" name="cb07" type="checkbox"><label for="cb13">Orange</label></li>
						<li><input id="cb08" name="cb08" type="checkbox"><label for="cb13">Sweetlime</label></li>
					</ul>
					<right>
					<p align="right"><b>Move to next step: Sauces</b></p>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; float: right" onClick="location.href='sauce.php'">
					</right>
				</form>
			</section>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>