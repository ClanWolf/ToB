<?php
$lang = require __DIR__ . '/lib/init.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="ToB - Trial of Bloodright">
	<meta name="keywords" content="battletech, mechwarrior, clan, wolf, mech, battlemech, madcat, timberwolf, seyla, kerensky, bloodright, tob">
	<meta http-equiv="content-language" content="<?= $lang ?>">
	<meta name="robots" content="INDEX,FOLLOW">

	<title>Clan Wolf - Trial of Bloodright</title>

	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono">
	<link rel="stylesheet" href="css/stylesheet.css">

	<style>
		.container {
			height: 100%;
			margin-bottom: 0px;
			padding: 25px 0 0 0;
		}
	</style>

	<script src="https://use.fontawesome.com/908b97f3a3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body>
	<div class="selected_flag">
		<a href="#">
			<img name="flag" id="flag" src="img/flag/<?= $lang ?>.png" width="30px">
		</a>
	</div>

	<div class="head_structure" id="headstructure" style="z-index: 20;"></div>

	<div class="mech_left">
		<img src="img/timberwolf-left.png" width="330px">
	</div>
	<div class="mech_right">
		<img src="img/timberwolf-right.png" width="330px">
	</div>

	<div id="contentwindow" class="content">
		<div class="navigation">
			<a href="fame.php?lang=<?= $lang ?>"><?= t('9802', $lang) ?></a>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="tables.php?lang=<?= $lang ?>"><?= t('3020', $lang) ?></a>
			&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="rules.php?lang=<?= $lang ?>"><?= t('3030', $lang) ?></a>
			&nbsp;<br><hr>
		</div>

		<div class="container">
			<iframe src="http://cwg.challonge.com/ToB_CW_B_201704/module?theme=3821&multiplier=1.0&match_width_multiplier=0.8&show_final_result=0"
				width="100%"
				height="95%"
				frameborder="0"
				scrolling="auto"
				allowtransparency="true">
			</iframe>
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

	<div class="content_language_selector" style="top: -1px; z-index: 0;">
		<table style="width: 300px; border-collapse: collapse; border-spacing: 0px; border: 0px; margin: 0px; padding: 0px;">
			<tr>
				<td style="padding: 0px; text-align: right;" width="100px">
					<img src="img/selector_left.png" width="100px" height="550px">
				</td>
				<td style="padding: 0px; text-align: center;" width="100px">
					<img src="img/selector_center.png" width="100px" height="550px">
				</td>
				<td style="padding: 0px; text-align: left;" width="100px">
					<img src="img/selector_right.png" width="100px" height="550px">
				</td>
			</tr>
		</table>
	</div>

	<div class="bottom">
		<script src="js/script.js"></script>
		<script src="js/cookies.js"></script>
		<script src="js/howler.min.js"></script>
		<script src="js/sound.js"></script>

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
