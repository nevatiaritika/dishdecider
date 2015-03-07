<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Choose your diet style</title>
		<meta name="description" content="Animated Checkboxes and Radio Buttons with SVG: Using SVG for adding some fancy 'check' animations to form inputs" />
		<meta name="keywords" content="animated checkbox, svg, radio button, styled checkbox, css, pseudo element, form, animated svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
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
					<h2>Which cereals do you have?</h2>
					<ul>
						<li><input id="cb10" name="cb10" type="checkbox"><label for="cb10">Rice</label></li>
						<li><input id="cb11" name="cb11" type="checkbox"><label for="cb11">Wheat</label></li>
						<li><input id="cb12" name="cb12" type="checkbox"><label for="cb12">Jowar</label></li>
						<li><input id="cb13" name="cb13" type="checkbox"><label for="cb13">Bajra</label></li>
					</ul>
					<right>
					<p align="right"><b>Move to next step</b></p>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; float: right">
					</right>
				</form>
			</section>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>