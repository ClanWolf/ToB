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
		td { padding: 0px; }
		table { border-spacing: 0px; border-collapse: separate; }
		.container { overflow-y: auto; }
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
			<a href="rules.php?lang=<?= $lang ?>"><?= t('3030', $lang) ?></a>
			&nbsp;<br><hr>
		</div>

		<div class="container">
			<div class="wrapper">

			<h1><?= t('9802', $lang) ?></h1>

			<p>"Each of the original 800 warriors who followed Nicholas Kerensky on his Second Exodus and returned with him to
			the Pentagon Worlds in 2821 during Operation Klondike were immortalized as founders of their Bloodname House.
			These progenitors formed the foundation of the Clans' eugenics program, and all warriors born to a given Bloodname
			legacy since that time are considered to be part of their associated Bloodname House by virtue of relation to the
			progenitor. Eligibility is determined by matrilineal descent; beyond the first generations to be decanted, no
			warrior may ever claim more than one Bloodhouse. (...)"
			<br>[<a href="http://www.sarna.net/wiki/Bloodhouse" target="_blank">Sarna</a>]</p>

			<p align="center">Last Winner:<br>IDee FETLADRAL</p>

			<p align="center"><i>Houses are sorted by the number of members,<br>warriors are sorted alphabetically by first name.<br><br></i></p>

			<table width='100%'>
			<tr>
				<th><?= t('9810', $lang) ?></th>
				<th><?= t('9820', $lang) ?></th>
				<th></th>
				<th><?= t('8160', $lang) ?></th>
				<th><?= t('8110', $lang) ?></th>
				<th><?= t('9860', $lang) ?></th>
				<th><?= t('9870', $lang) ?></th>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>House of Ward</h4></td></tr>

			<tr>
				<td>CW</td><td>Ω</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Affinity Ward</td><td>-</td><td>CWI</td><td>2015 / 11</td>
			</tr>
			<tr>
				<td>CW</td><td>B</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Asatur Ward</td><td>=WC=AnSolloc</td><td>=WC=</td><td>2003</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Devkill Ward</td><td>-</td><td>CWI</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Grayson Ward</td><td>-</td><td>CWG</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>B</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Loader Ward</td><td>-</td><td>RCW</td><td>2003</td>
			</tr>
			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td><a href="bloodnamed.php?lang=<?= $lang ?>">Meldric Ward</a></td>
				<td>Merlin Conners</td><td>CW</td><td>2015 / 02</td>
			</tr>
			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCpt.png" width="16px"></td>
				<td>Michael 'Riot' Ward</td><td>Merlin Conners</td><td>CW</td><td>2015 / 02</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Volks Ward</td><td>-</td><td>CWI</td><td>2016 / 01</td>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>House of Kerensky</h4></td></tr>

			<tr>
				<td>CW</td><td>K</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Cedien Kerensky</td><td>-</td><td>CWI</td><td>2016 / 02</td>
			</tr>
			<tr>
				<td>CW</td><td>B</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Demiurge Kerensky</td><td>-</td><td>RCW</td><td>2003</td>
			</tr>
			<tr>
				<td>CW</td><td>B</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Kot Kerensky</td><td>-</td><td>RCW</td><td>2004</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCpt.png" width="16px"></td>
				<td>Vincent Kerensky</td><td>-</td><td>CWI</td><td>2015 / 08</td>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>House of Fetladral</h4></td></tr>

			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Big Fetladral</td><td>-</td><td>CWG</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Cobaltgreen Fetladral</td><td>-</td><td>CWI</td><td>2015 / 08</td>
			</tr>
			<tr>
				<td>CW</td><td>B</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>IDee Fetladral</td><td>-</td><td>CWI</td><td>2017 / 04</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Zombie Fetladral</td><td>-</td><td>CWI</td><td>2015 / 05</td>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>House of Conners</h4></td></tr>

			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Lanadon Conners</td><td>-</td><td>CWI</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Merlin Conners</td><td>-</td><td>CWI</td><td>-</td>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>House of Rhyde</h4></td></tr>

			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Gunny Rhyde</td><td>-</td><td>CWI</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Manny Rhyde</td><td>-</td><td>CWI</td><td>2016 / 01</td>
			</tr>

			<tr><td colspan="7" style="text-align: center;"><h4>Other Houses</h4></td></tr>

			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Arnold Carns</td><td>-</td><td>CWG</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCpt.png" width="16px"></td>
				<td>ChokoWolf Sradac</td><td>-</td><td>CWI</td><td>2017 / 01</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Deckard C. Sender</td><td>-</td><td>CWI</td><td>2016 / 04</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Kael Posavatz</td><td>-</td><td>CWI</td><td>2016 / 04</td>
			</tr>
			<tr>
				<td>CW</td><td>Γ</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Mad Jorgensson</td><td>-</td><td>CWG</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>K</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCpt.png" width="16px"></td>
				<td>Poptimus R. Wallace</td><td>-</td><td>CWI</td><td>2016 / 04</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCom.png" width="16px"></td>
				<td>Redwolf77 Shaw</td><td>-</td><td>CWI</td><td>-</td>
			</tr>
			<tr>
				<td>CW</td><td>Ω</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/SCol.png" width="16px"></td>
				<td>Rouken Vordermark</td><td>-</td><td>CWI</td><td>2016 / 01</td>
			</tr>
			<tr>
				<td>CW</td><td>A</td>
				<td width="24px" style="text-align: center;"><img src="img/rank/MW.png" width="16px"></td>
				<td>Serakek Radick</td><td>Merlin Conners</td><td>CWG</td><td>2015 / 02</td>
			</tr>
			</table>

			</div>
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
