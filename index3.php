<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>KSA PARSIVAL ONLINE</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
  html, body{margin:0px; text-align:center; background:url(indeximages/bg.png); }
</style>
</head>

<body>
<a href="index2.php" style="text-decoration:none; color:#09C;">
<div id="index_header">
<h2>Klik hier om verder te gaan naar onze hoofdpagina</h2>
</div>
</a>
&nbsp;
<div id="index_header" style="background:none;">
<h2 style="color:#000;">Bekijk hier de diareeks van 50 jaar KSA Parsival</h2>
</div>

<iframe width="960" height="720" src="http://www.youtube.com/embed/9YuBtAGcPqI" frameborder="0" allowfullscreen></iframe>

<!--<div style="width:80%; margin:auto; text-align:left;">

<?php if(isset($_POST['submit'])){ ?>
	
    <?php
	$totaalprijs = ($_POST['kinder']*9)+($_POST['normal']*11)+($_POST['maxi']*13)+($_POST['vegi']*7);
	?>

	<?php
	$to      = $_POST['email'];
	$subject = 'KSA Parsival | Bevestiging bestelling';
	$message = 'We hebben je bestelling goed ontvangen.' . "\r\n" . 'Aantal Kinderschotels: ' . $_POST['kinder'] . "\r\n" . 'Aantal Kleine schotels: ' . $_POST['normal'] . "\r\n" . 'Aantal normale schotels: ' . $_POST['maxi'] . "\r\n" . 'Aantal vegi schotels: ' . $_POST['vegi'] . "\r\n" . 'Totaalprijs: ' . $totaalprijs . "\r\n" . 'Alvast bedankt en tot dan!';
	$headers = 'From: KSA Parsival';
	mail($to, $subject, $message, $headers);
	?>
    
	<?php
	$to      = 'a1dw@hotmail.com';
	$subject = 'Winterbbq | Bevestiging bestelling';
	$message = 'Nieuwe bestelling:' . "\r\n" . 'Naam: ' . $_POST['naam'] . "\r\n" . 'Email: ' . $_POST['email'] . "\r\n" . 'Aantal Kinderschotels: ' . $_POST['kinder'] . "\r\n" . 'Aantal Kleine schotels: ' . $_POST['normal'] . "\r\n" . 'Aantal normale schotels: ' . $_POST['maxi'] . "\r\n" . 'Aantal vegi schotels: ' . $_POST['vegi'] . "\r\n" . 'Totaalprijs: ' . $totaalprijs;
	$headers = 'From: KSA Parsival';
	mail($to, $subject, $message, $headers);
	?>

	<div style="width:100%; float:left;"><h2>Bedankt voor je bestelling!</h2>
    <p>Kijk zeker je e-mail na of je een bevestiging van ons hebt gekregen.</p>
    <p>We vragen je wel zo snel mogelijk te betalen op 777-5905323-39. Je kan ook altijd de avond zelf cash betalen, maar we raden dit af om een vlotte bediening te garanderen. </p>
    </div>
	<div style="clear:both;"></div>
<?php }else{ ?>

<form action="" method="post">

<div style="width:50%; float:left;"><h2>Contactgegevens</h2></div>
<div style="clear:both;"></div>

<div style="width:25%; float:left;">
<h3>Naam</h3>
<p><input type="text" name="naam" size="30" /></p>
</div>

<div style="width:25%; float:left;">
<h3>Email</h3>
<p><input type="text" name="email" size="30" /></p>
</div>

<div style="clear:both;"></div>

<div style="width:50%; float:left;"><h2>Bestelling</h2></div>
<div style="clear:both;"></div>

<div style="width:25%; float:left;">
<h3>Kinderschotels</h3>
<p>1 stuk vlees, groentjes, brood en saus</p>
<p>
<select name="kinder">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select>
 x 9 euro
</p>
</div>

<div style="width:25%; float:left;">
<h3>Kleine schotels</h3>
<p>2 stukken vlees, groentjes, brood en saus</p>
<p>
<select name="normal">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select>
 x 11 euro
</p>
</div>

<div style="width:25%; float:left;">
<h3>Normale schotels</h3>
<p>3 stukken vlees, groentjes, brood en saus</p>
<p>
<select name="maxi">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select>
 x 13 euro
</p>
</div>

<div style="width:25%; float:left;">
<h3>Vegi schotels</h3>
<p>groentjes, brood en saus. Vleesvervangers mag je altijd meenemen en aan onze chefs overhandigen.</p>
<p>
<select name="vegi">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select>
 x 7 euro
</p>
</div>

<div style="clear:both;"></div>

<div style="width:50%; float:left;"><h2>Bevestiging</h2></div>
<div style="clear:both;"></div>

<div style="width:25%; float:left;">
<p>
<input type="submit" name="submit" value="bestellen" />
</p>
</div>

<div style="clear:both;"></div>

</form>

<?php } ?>

</div>
-->
</body>
</html>