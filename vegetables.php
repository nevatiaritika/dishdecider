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
			background-image: url(http://hdwyn.com/thumbnail/cucumbers_tomatoes_plate_dill_hd-wallpaper-75414.jpg);
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
				<a class="codrops-icon codrops-icon-prev" href="pulses.php"><span>Back to pulses selection</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="index.html"><span>Home</span></a></span>
			</div>
			<section>
				<form class="ac-custom ac-checkbox ac-cross" autocomplete="off">
					<h2>Which veggies?</h2>
					<ul>
						<li style="position: absolute; left: 200px;"><input id="cb01" name="cb01" type="checkbox"><label for="cb01">Tomato</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb02" name="cb02" type="checkbox"><label for="cb02">Potato</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb03" name="cb03" type="checkbox"><label for="cb03">Brocoli</label></li><br><br><br>
						<li style="position: absolute; left: 200px;"><input id="cb04" name="cb04" type="checkbox"><label for="cb04">Capsicum</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb05" name="cb05" type="checkbox"><label for="cb05">Cabbage</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb06" name="cb06" type="checkbox"><label for="cb06">Spinach</label></li><br><br><br>
						<li style="position: absolute; left: 200px;"><input id="cb07" name="cb07" type="checkbox"><label for="cb07">Corriander</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb08" name="cb08" type="checkbox"><label for="cb08">Corn</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb12" name="cb12" type="checkbox"><label for="cb12">Cauliflower</label></li><br><br><br>
						<li style="position: absolute; left: 200px;"><input id="cb13" name="cb13" type="checkbox"><label for="cb13">Onion</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb14" name="cb14" type="checkbox"><label for="cb14">Celery</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb15" name="cb15" type="checkbox"><label for="cb15">Carrot</label></li><br><br><br>
						<li style="position: absolute; left: 200px;"><input id="cb16" name="cb16" type="checkbox"><label for="cb16">Radish</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb17" name="cb17" type="checkbox"><label for="cb17">Lettuce</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb18" name="cb18" type="checkbox"><label for="cb18">Beetroot</label></li><br><br><br>
						<li style="position: absolute; left: 200px;"><input id="cb19" name="cb19" type="checkbox"><label for="cb19">Cucumber</label></li>
						<li style="position: absolute; left: 500px;"><input id="cb20" name="cb20" type="checkbox"><label for="cb20">Peas</label></li>
						<li style="position: absolute; left: 800px;"><input id="cb21" name="cb21" type="checkbox"><label for="cb21">Garlic</label></li>
					</ul>
					
				</form>
			</section>
			<right>
					<p align="right" style="position: absolute; right: 100px;"><b>Move to next step: Fruits</b></p><br><br><br>
					<input type="button" style="background: url(images/next.png) no-repeat; width:64px; height:64px; position: absolute; right: 175px;" onClick="location.href='fruits.php'">
					</right>
		</div><!-- /container -->
		<script src="js/svgcheckbx.js"></script>
	</body>
</html>