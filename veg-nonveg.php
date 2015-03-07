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
		<style type="text/css">
		body {
			background-image: url(http://www.adocnazionale.it/wp-content/uploads/2013/03/323304-blackangel.jpg);
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
				<a class="codrops-icon codrops-icon-prev" href="index.html"><span>Home</span></a>
			</div>
			<section>
				<form class="ac-custom ac-radio ac-fill" autocomplete="off">
					<br>
					<h2>Choose your diet style</h2>
					<ul>
						<li><input id="r1" name="r1" type="radio"><label for="r1">Jain</label></li>
						<li><input id="r2" name="r1" type="radio"><label for="r2">Vegetarian</label></li>
						<li><input id="r3" name="r1" type="radio"><label for="r3">Non-Vegetarian</label></li>
					</ul>
					<right>
					<p align="right"><b>Move to next step: Base Ingredients</b></p>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; float: right" onClick="location.href='jain-cereals.php'">
					</right>
				</form>
			</section>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>