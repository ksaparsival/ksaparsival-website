<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KSA PARSIVAL ONLINE</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>

<script type="text/javascript">
onload=function() {
	var content_h = document.getElementById('content').offsetHeight;
	var bottom = document.getElementById('bottom'); 
	var footer = document.getElementById('footer');
	bottom.style.top = content_h + 175 + 'px';
	footer.style.top = content_h + 180 + 'px';
}
</script>

<div id="main">
	<div id="content">
    	<h2><?php echo $_GET['id']; ?></h2>
<?php 
if(isset($_GET['id'])){
	$id = $_GET['id'];
	if($id=='over ons'){
		echo "<h3>wie zijn wij?</h3>";
		echo "<p>KSA Parsival is de leukste, de tofste, de actiefste Edegemse jeugdbeweging voor jongens. Wij staan elke zaterdagnamiddag van 14u tot 17u klaar om de plezantste dingen te doen! Onze leden komen van overal in de buurt, iedereen is welkom! Wij zijn een katholieke (de K van KSA) actie (de A) die volledig draait dankzij een leuke groep van leiders die nog studerende (de S!) zijn. Wij maken met onze KSA deel uit van een grotere organisatie, namelijk KSA Antwerpen (Provinciaal). Zij zorgen voor ondersteuning die wij nodig hebben voor onze gewone bezigheden. De overkoepelende organisatie voor alle provinciale werkingen van Vlaanderen is KSA Nationaal, zij houden zich ook bezig met ondersteuning te geven aan plaatselijke groepen.</p>";
		echo "<p align='center'>
		<a><img src='files/info/1.JPG' width='150' height='113'></a> &nbsp; 
		<a><img src='files/info/2.JPG' width='150' height='113'></a> &nbsp;
		<a><img src='files/info/3.JPG' width='150' height='113'></a>
		</p>";
		
		echo "<h3>waar kan je ons vinden?</h3>";
		echo "<p>Onze lokalen vind je aan het Fort V, één van de mooiste en rustigste plekjes in de buurt. We kunnen er naar hartelust ravotten en spelen. We moeten zelfs geen straat over steken! Onze lokalen zijn eigenlijk een deel van de oude kazernes aan het Fort. We hebben er een heel grote zaal voor moest het regenen en vele kleinere gezellige lokalen. Ook beschikken wij in het Fort nog over een groot &acute;houtlokaal&acute;, waar ons groot materiaal (balken tot 15 meter lang) kan wachten op een volgend kamp.<br /> Het juiste adres: J.De Roorestraat 2, 2650 Edegem </p>";
		
		echo "<h3>en hoe zit het met de meisjes?</h3>";
		echo "<p>KSA Parsival is er inderdaad alleen maar voor de jongens, maar geen nood voor de meisjes... wij werken namelijk nauw samen met KSA Molenveld en deze jeugdbeweging is er alleen voor de meisjes. Zij hebben hun lokaal ook in het Fort V, aan de Parklaan iets verder dan jeugdhuis Nootuitgang. Ook zij hebbben hun vergadering elke zaterdagnamiddag. Bezoek hun website op <a class='link' href='http://www.ksamolenveld.be' target='_blank'>www.ksamolenveld.be</a></p>";
	
		echo "<p align='center'><a href='http://www.ksj.be/index.php?wk=1&page=nieuw&naam=370' target='_blank'><img src='files/info/verzekeringslogo.gif' width='222' height='102'></a></p>";
		
	}elseif($id=='leiding'){
		echo "<p>Hieronder vindt u een overzicht van de leidingsploegen voor het komende jaar. Bij vragen over activiteiten of andere zaken omtrent KSA neemt u best contact op met de bantrekkers.</p>";
				
		echo "<h3>Sloebers</h3>";
		echo "<p>Wimme de Gendt (bantrekker) | 0472/71.73.50 | <a class='link' href='mailto: sloebers@ksaparsival.be '>E-mail</a>
		<br />Olivier Deforche
		<br />Robin van Nuffel
		<br />Sander Ceuleers
		<br />Tijs de Geus
		<br />Raf Van Steenwinckel</p>";
		
		echo "<h3>Jongknapen</h3>";
		echo "<p>Miguel Goedseels (bantrekker) | 0471/24.55.64 | <a class='link' href='mailto: jongknapen@ksaparsival.be'>E-mail</a>
		<br />Alec Beelen
		<br />Cédric Goedseels
		<br />Daan Hermans
		<br />Wies Notteboom
		<br />Lorenz Streffer</p>";

		echo "<h3>Knapen</h3>";
		echo "<p>Anton Rihoux (bantrekker) | 0468/10.75.03 | <a class='link' href='mailto: knapen@ksaparsival.be'>E-mail</a>
		<br />Marnix Thielman
		<br />Tom Maes
		<br /></p>";
				
		echo "<h3>JHN</h3>";
		echo "<p>Benoit Deforche (bantrekker) | 0484/54.06.09 | <a class='link' href='mailto: jonghernieuwers@ksaparsival.be'>E-mail</a>
		<br />Simon de Geus
		<br />Bas Maldoy
		<br />Felix de Langhe</p>";

	}elseif($id=='contact'){
		echo "<h3>Bondsleider</h3>";
		echo "<p>Lorenz Streffer<br />";
		echo "Guido-gezellelaan 24 - 2640 Mortsel<br />";
		echo "0471/71.32.12<br />";
		echo "<a class='link' href='mailto: bondsleider@ksaparsival.be'>bondsleider@ksaparsival.be</a></p>";

		echo "<h3>Secretaris</h3>";
		echo "<p>Olivier Deforche<br />";
		echo "Oude Godstraat 34 - 2650 Edegem<br />";
		echo "0487/66.67.90<br />";
		echo "<a class='link' href='mailto: secretaris@ksaparsival.be'>secretaris@ksaparsival.be</a></p>";
	
	}
}
?>
	</div>
    <div id="header">
         <h1>informatie</h1>
    </div>
    <div id="menu">
    	<ul class="menu_ul">
        	<li class="menu_li"><a class="menu_link" href="http://www.ksaparsival.be">home</a></li>
            <li class="menu_li">&nbsp;|&nbsp;</li>
            <li class="menu_li"><a class="menu_link" href="info.php?id=over ons">info</a></li>
            <li class="menu_li">&nbsp;|&nbsp;</li>
            <li class="menu_li"><a class="menu_link" href="planning.php">planning</a></li>
            <li class="menu_li">&nbsp;|&nbsp;</li>
            <li class="menu_li"><a class="menu_link" href="verhuur.php?id=tenten">verhuur</a></li>
            <li class="menu_li">&nbsp;|&nbsp;</li>
            <li class="menu_li"><a class="menu_link" href="https://www.facebook.com/pg/ksaparsival/photos/?ref=page_internal" target="_blank"">foto's</a></li>
		</ul>
    </div>
    <div id="submenu">
    	<ul class="submenu_ul">
        	<li class="submenu_li"><a class="submenu_link" href="?id=over ons">over ons</a></li>
            <li class="submenu_li">&nbsp;|&nbsp;</li>
            <li class="submenu_li"><a class="submenu_link" href="?id=leiding">leiding</a></li>
            <li class="submenu_li">&nbsp;|&nbsp;</li>
            <li class="submenu_li"><a class="submenu_link" href="?id=contact">contact</a></li>
		</ul>
    </div>
    <div id="foto1">&nbsp;</div>
    <div id="bottom">
    	&nbsp;<br />
	</div>
    <div id ="footer">
    	KSA PARSIVAL | J.De Roorestraat 2, 2650 Edegem | All rights reserved
	</div>
</div>
</body>
</html>
