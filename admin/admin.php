<?php 
if(empty ($_COOKIE['ksa_admin'])) {
	header("Location: index.php");
	exit;
}else{
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>KSA PARSIVAL ONLINE - ADMIN</title>
	<SCRIPT LANGUAGE="JavaScript">
    function popUp(URL) {
    day = new Date();
    id = day.getTime();
    eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=500,left = 390,top = 150');");
    }
    </script>
    </head>
    <body>
<?php
	if($_POST['submit']=='Klusje toevoegen'){
		setlocale(LC_ALL, 'nl_NL');
		$kluslijst = simplexml_load_file("../files/xml/kluslijst.xml");
		$kluslijst->id['nummer']=$kluslijst->id['nummer']+1;
		$klus = $kluslijst->addChild('klus');
		$klus->addAttribute('id', $kluslijst->id['nummer']);
		$klus->addAttribute('datum', strftime("%e %B"));
		$klus->addAttribute('persoon', $_POST['klus_naam']);
		$klus->addAttribute('omschrijving', $_POST['klus_omschrijving']);
		file_put_contents("../files/xml/kluslijst.xml", $kluslijst->asXml());
		echo 'Het klusje is toegevoegd aan de lijst!';
	}elseif($_POST['submit']=='Klusje verwijderen'){
		$kluslijst = simplexml_load_file("../files/xml/kluslijst.xml");
		$aantal_klusjes = count($kluslijst->klus);
		for($j=1; $j<=$aantal_klusjes; $j++){
			if($kluslijst->klus[$j-1]['id']==$_POST['radio_id']){
				unset($kluslijst->klus[$j-1]);
				break;
			}
		}
		file_put_contents('../files/xml/kluslijst.xml', $kluslijst->asXml());
		echo 'Er is een klusje verwijderd!';
	}elseif($_POST['submit']=='Weekbrief uploaden'){
		$planning = simplexml_load_file("../files/xml/planning.xml");
		foreach($planning->banplanning as $banplanning){
			if($banplanning['id']==$_POST['ban']){
				$banplanning['p1']=$_POST['par1'];
				$banplanning['p2']=$_POST['par2'];
				$banplanning['p3']=$_POST['par3'];
				$banplanning['foto1']=$_POST['foto1'];
				$banplanning['foto2']=$_POST['foto2'];
				break;
			}
		}
		file_put_contents("../files/xml/planning.xml", $planning->asXml());
		echo 'De weekbrief staat nu online!';
	}elseif($_POST['submit']=='Nieuwsbericht uploaden'){
		setlocale(LC_ALL, 'nl_NL');
		$nieuws = simplexml_load_file("../files/xml/nieuws.xml");
		$bericht = $nieuws->addChild('bericht');
		//$bericht->addAttribute('datum', strftime("%e %B"));
		$bericht->addAttribute('onderwerp', $_POST['onderwerp']);
		$bericht->addAttribute('tekst', $_POST['bericht']);
		if(!$_POST['link']==''){
			$bericht->addAttribute('link', $_POST['link']);
		}else{
			$bericht->addAttribute('link', 'null');
		}
		file_put_contents("../files/xml/nieuws.xml", $nieuws->asXml());
		echo 'Het nieuwsbericht staat nu online!';	
	}
	
	elseif(isset($_FILES['maandbrief'])) { 
		if($_FILES['maandbrief']['type']=='application/pdf'){
			move_uploaded_file($_FILES["maandbrief"]["tmp_name"], "../files/maandbrieven/maandbrief_".$_POST["ban"].".pdf");
			echo 'De maandbrief staat nu online!';
		}else{
			echo '<b>Het bestand moet PDF zijn!</b>';
		}
	} 
	if($_GET['id']=='weekbrief'){
    	echo '<form action="admin.php?id=weekbrief" method="post">
		<a href="admin.php">Terug naar hoofdmenu</a><br /><br />
        <b>Weekbrief uploaden</b>
        <table>
        <tr><td>Ban: </td><td>
		<select name="ban">
		<option>...</option>
		<option value="piepers">piepers</option>
		<option value="sloebers">sloebers</option>
		<option value="jongknapen">jongknapen</option>
		<option value="knapen">knapen</option>
        <option value="jonghernieuwers">jonghernieuwers</option>
        <option value="plus16">plus16</option>
        </select></td></tr>
        <tr><td>Paragraaf 1: </td><td><textarea name="par1" rows="4" cols="60" ></textarea>Voor een nieuwe lijn moet je "&lt;br/&gt;" typen.</td></tr>
        <tr><td>Paragraaf 2: </td><td><textarea name="par2" rows="4" cols="60" ></textarea></td></tr>
        <tr><td>Paragraaf 3: </td><td><textarea name="par3" rows="4" cols="60" ></textarea></td></tr>
        </table>
        <table>
        <tr><td>Hier onder telkens de volledige URL naar de foto plaatsen. Gelieve geen afbeeldingen op onze server te plaatsen, want dan gaat hij snel volstaan!</td></tr>
        <tr><td>Bijvoorbeeld: "http://www.nindo.be/Afbeeldingen/kabouterWesley.jpg"</td></tr>
  		<tr><td>Foto 1: <input type="text" name="foto1" size="60" /></td></tr>
        <tr><td>Foto 2: <input type="text" name="foto2" size="60" />(<b>Je plaatst best geen 2 afbeeldingen bij een kort tekstje</b>)</td></tr>
		</table>
		<table>
		<tr><td><input type="submit" name="submit" value="Weekbrief uploaden" /></td></tr>
		</table>
        </form>';
	}elseif($_GET['id']=='maandbrief'){
		?>
        <form enctype="multipart/form-data" action="admin.php?id=maandbrief" method="post">
        <a href="admin.php">Terug naar hoofdmenu</a><br /><br />
        <b>JE BESTAND KAN MAXIMUM 2MB GROOT ZIJN! LET ER DUS OP HOEVEEL FOTO'S JE GEBRUIKT EN VAN WELKE KWALITEIT ZE ZIJN!</b><br /><br />
        <table><tr><td>Ban: </td>
        <td><select name="ban">
		<option>...</option>
		<option value="piepers">piepers</option>
		<option value="sloebers">sloebers</option>
		<option value="jongknapen">jongknapen</option>
		<option value="knapen">knapen</option>
        <option value="jonghernieuwers">jonghernieuwers</option>
        <option value="plus16">plus16</option>
        </select></td></tr></table>
		<table>
        <tr>
        <td><input type="file" name="maandbrief"/></td>
        <td><input type="submit" name="submit" value="Upload maandbrief"/></td>
        </tr>
        </table>
        </form>
		<?php
	}elseif($_GET['id']=='nieuws'){
		echo '<form action="admin.php?id=nieuws" method="post">
		<a href="admin.php">Terug naar hoofdmenu</a><br /><br />
        <b>Nieuwsbericht uploaden | Enkel voor de webmasters </b>
        <table>
		<tr><td>Onderwerp: </td><td><input type="text" name="onderwerp" size="60" /></td></tr>
		<tr><td>Bericht: </td><td><textarea name="bericht" rows="4" cols="60" ></textarea></td></tr>
		<tr><td>Link: </td><td><input type="text" name="link" size="60" /></td></tr>
		</table>
		<table>
		<tr><td><input type="submit" name="submit" value="Nieuwsbericht uploaden" /></td></tr>
		</table>';
	}elseif($_GET['id']=='kalender'){
		echo 'Dit gedeelte komt binnenkort online.';	
	}elseif($_GET['id']=='kluslijst'){
		?><form action="admin.php?id=kluslijst" method="post">
		<a href="admin.php">Terug naar hoofdmenu</a>
        <br /><br /><b>Huidige taken:</b><?php
		$kluslijst = simplexml_load_file("../files/xml/kluslijst.xml");
		?><table border="1"><?php
		foreach($kluslijst->klus as $kluslijst){
		?><tr><?php
		echo "<td><input type='radio' name='radio_id' value='".$kluslijst['id']."'></td>";
		echo "<td>".$kluslijst['datum']."</td>";
		echo "<td>".$kluslijst['persoon']."</td>";
		echo "<td>".$kluslijst['omschrijving']."</td>";
		?></tr><?php
		}
		?></table>
        <br /><br /><b>Nieuw klusje toevoegen:</b>
        <table>
        <tr><td>Naam:</td><td><input type="text" name="klus_naam" size="60" /></td></tr>
        <tr><td>Omschrijving:</td><td><textarea name="klus_omschrijving" rows="4" cols="60" ></textarea></td></tr>
        <tr><td><input type="submit" name="submit" value="Klusje toevoegen" /></td></tr>
        </table>
        <br/><br/><b>Klusje verwijderen:</b><br/>
       	Selecteer eerst het klusje dat je wil verwijderen en duw dan op deze knop:
        <table>
        <tr><td><input type="submit" name="submit" value="Klusje verwijderen" /></td></tr>
        </table>
        <br/><br/><b>Kluslijst afdrukken:</b><br />
		<A HREF="javascript:popUp('admin.php?id=kluslijst_printen')">Klik hier voor de print versie</A>
        </form>
        <?php	
    }elseif($_GET['id']=='kluslijst_printen'){
		?><a href="javascript:window.print()">Print deze pagina</a><?php
		$kluslijst = simplexml_load_file("../files/xml/kluslijst.xml");
		?><table style="border-width: 1px; border-style: solid; border-collapse: collapse; font-size:20px;"><?php
		foreach($kluslijst->klus as $kluslijst){
		?><tr><?php
		echo "<td style='border-width: 1px; padding: 5px; border-style: solid;'>".$kluslijst['datum']."</td>";
		echo "<td style='border-width: 1px; padding: 5px; border-style: solid;'>".$kluslijst['persoon']."</td>";
		echo "<td style='border-width: 1px; padding: 5px; border-style: solid;'>".$kluslijst['omschrijving']."</td>";
		?></tr><?php
		}
		?></table><?php
	}else{
		echo '<ul>
		<li><a href="?id=weekbrief">Weekbrief uploaden</a></li>
		<li><a href="?id=maandbrief">Maandbrief uploaden</a></li>
		<li><a href="?id=nieuws">Nieuws toevoegen</a></li>
		<li><a href="?id=kalender">Kalender aanpassen</a></li>
		<li><a href="?id=kluslijst">De kluslijst raadplegen en/of aanvullen</a></li>
		</ul>';
    }
}
?>
</body>
</html>
