<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="ToB - Trial of Bloodright">
	<meta name="keywords" content="battletech, mechwarrior, clan, wolf, mech, battlemech, madcat, timberwolf, seyla, kerensky, bloodright, tob">
	<meta http-equiv="content-language" content="en">
	<meta name="robots" content="INDEX,FOLLOW">

	<title>Clan Wolf - Trial of Bloodright</title>

	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono">
	<link rel="stylesheet" href="css/stylesheet.css">

	<style>
		/* Hide chrome that does not apply to the language landing page. */
		#contentwindow .navigation,
		#contentwindow .tourneyselector {
			display: none;
		}
		#contentwindow {
			display: none;
		}
	</style>

	<script src="https://use.fontawesome.com/908b97f3a3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
	<div class="selected_flag">
		<a href="#">
			<img name="flag" id="flag" src="img/flag/empty.png" width="30px">
		</a>
	</div>

	<div class="galaxy_symbol">
		<img name="galaxy" src="img/WolfEmpty.png" width="90px">
	</div>

	<div name="movable" id="1000" class="top_background"></div>
	<div class="head_structure" id="headstructure"></div>

	<div class="mech_left">
		<img src="img/timberwolf-left.png" width="330px">
	</div>
	<div class="mech_right">
		<img src="img/timberwolf-right.png" width="330px">
	</div>

	<div id="contentwindow" class="content">
		<div id="typedtext"></div>

		<div class="fastforwardbutton">
			<a href="/home" style="font-family: 'Arial', sans-serif; font: normal 28px 'Arial';">&gt;&gt;&gt;</a>
		</div>

		<div class="hudanimation">
			<img src="img/hud.gif" width="300px">
		</div>

		<div class="hudcenteranimation">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				viewBox="0 0 1000 1000" style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
				<circle class="st0" cx="500" cy="500" r="302.8">
					<animateTransform attributeType="xml" attributeName="transform" type="rotate"
						from="0 500 500" to="360 500 500" dur="100s" repeatCount="indefinite"/>
				</circle>
				<circle class="st1" cx="500" cy="500" r="237.7">
					<animateTransform attributeType="xml" attributeName="transform" type="rotate"
						from="0 500 500" to="360 500 500" dur="40s" repeatCount="indefinite"/>
				</circle>
				<circle class="st2" cx="500" cy="500" r="366.8">
					<animateTransform attributeType="xml" attributeName="transform" type="rotate"
						from="0 500 500" to="-360 500 500" dur="50s" repeatCount="indefinite"/>
				</circle>
				<circle class="st3" cx="500" cy="500" r="395.1"/>
			</svg>
		</div>
	</div>

	<div name="movable" id="1010" class="fire">
		<img src="img/fire.gif" width="90px" height="180px">
	</div>

	<div name="movable" id="1020" class="content_language_selector">
		<table style="width: 300px; border-collapse: collapse; border-spacing: 0px; border: 0px; margin: 0px; padding: 0px;">
			<tr>
				<td style="padding: 0px; text-align: right;" width="100px">
					<a class="tooltip lang_selector" data-langstring="en" href="#">
						<span class="tooltiptext">Enter</span>
						<img src="img/selector_left.png" width="100px" height="550px"
							onmouseover="changeImage('galaxy','galaxyImage_Alpha');"
							onmouseout="changeImage('galaxy','galaxyImage_Empty');">
					</a>
				</td>
				<td style="padding: 0px; text-align: center;" width="100px">
					<a class="tooltip lang_selector" data-langstring="de" href="#">
						<span class="tooltiptext">Betreten</span>
						<img src="img/selector_center.png" width="100px" height="550px"
							onmouseover="changeImage('galaxy','galaxyImage_Gamma');"
							onmouseout="changeImage('galaxy','galaxyImage_Empty');">
					</a>
				</td>
				<td style="padding: 0px; text-align: left;" width="100px">
					<a class="tooltip lang_selector" data-langstring="ru" href="#">
						<span class="tooltiptext">войти</span>
						<img src="img/selector_right.png" width="100px" height="550px"
							onmouseover="changeImage('galaxy','galaxyImage_Beta');"
							onmouseout="changeImage('galaxy','galaxyImage_Empty');">
					</a>
				</td>
			</tr>
		</table>
	</div>

	<div class="bottom">
		<script src="js/script.js"></script>
		<script src="js/cookies.js"></script>
		<script src="js/typewriter.js"></script>
		<script src="js/howler.min.js"></script>
		<script src="js/sound.js"></script>
		<script src="js/langSelector.js"></script>

		<script>
			if (sound === "on") {
				document.write("<span id='soundswitch'><a href='#' onclick='setSoundOff();'><i class='fa fa-volume-up fa-lg' aria-hidden='true'></i></a></span>");
			} else {
				document.write("<span id='soundswitch'><a href='#' onclick='setSoundOn();'><i class='fa fa-volume-off fa-lg' aria-hidden='true'></i></a></span>");
			}
		</script>
	</div>

</body>
</html>
