<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124432676-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-124432676-1');
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>KSA PARSIVAL EDEGEM</title>
    <meta name="description" content="De leukste jeugdbeweging in Edegem voor jongens vanaf het 1ste leerjaar!">
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>

<body>
<script type="text/javascript">
    onload = function () {
        var content_h = document.getElementById('hoofdmenu_content').offsetHeight;
        var bottom = document.getElementById('bottom');
        var footer = document.getElementById('footer');
        bottom.style.top = content_h + 335 + 'px';
        footer.style.top = content_h + 340 + 'px';

    }
</script>
<a href="https://www.facebook.com/ksaparsival/" target="_blank">
    <div id="facebook_holder_mainpage">&nbsp;</div>
</a>
<div id="main">
    <div id="hoofdmenu">
        <a href="info.php?id=over%20ons">
            <div id="hoofdmenu_info"></div>
        </a>
        <a href="planning.php">
            <div id="hoofdmenu_planning">&nbsp;</div>
        </a>
        <a href="verhuur.php?id=tenten">
            <div id="hoofdmenu_verhuur">&nbsp;</div>
        </a>
        <a href="https://www.facebook.com/pg/ksaparsival/photos/?ref=page_internal" target="_blank">
            <div id="hoofdmenu_fotos">&nbsp;</div>
        </a>
    </div>
    <?php
    $nieuws = simplexml_load_file("files/xml/nieuws.xml");
    $kalender = simplexml_load_file("files/xml/kalender.xml");
    ?>
    <div id="hoofdmenu_content">
        <div id="hoofdmenu_nieuws">
            <h2>Nieuws</h2>
            <?php
            $AantalBerichten = count($nieuws->bericht) - 1;
            for ($i = $AantalBerichten; $i >= $AantalBerichten - 1; $i--) { ?>
                <h3><?php echo $nieuws->bericht[$i]['onderwerp']; ?></h3>
                <p><?php echo $nieuws->bericht[$i]['tekst'];
                    if ($nieuws->bericht[$i]['link'] != "null") { ?>
                        <a class="link" href="<?php echo $nieuws->bericht[$i]['link']; ?>"> Meer info</a>
                    <?php } ?></p>
                <?php
            }
            ?>
        </div>
        <div id="hoofdmenu_kalender">
            <h2>Kalender</h2>
            <p><strong>1-2 september</strong> - Jaarmarkt Edegem<br/>
                <strong>8 september</strong> - Startdag + uniformverkoop<br/>
                <strong>19 oktober</strong> - Dag van de jeugdbeweging<br/>
                <strong>20 oktober</strong> - Kaas en wijn avond<br/>
                <strong>1 december</strong> - Sinterklaasvergadering<br/>
                <strong>23 februari</strong> - kinderfuif<br/>
                <strong>23-31 maart</strong> - wafeltjesverkoop<br/>
                <strong>16-19 april</strong> - Weekend voor Sloebers, Jonknapen en Knapen<br/>
                <strong>16-19 april</strong> - Joepie voor JHN<br/>
                <strong>24 april</strong> - Buitenspeeldag<br/>
                <strong>25 mei</strong> - Laatste vergadering<br/>
                <strong>29 juni</strong> - Bondsuitstap<br/>
                <strong>20-30 juli</strong> - Kamp jongknapen, knapen en jonghernieuwers<br/>
                <strong>25-30 juli</strong> - Kamp sloebers<br/>
            <p>
                <?php
                for ($j = 0;
                $j < count($kalender->planning);
                $j++){
                $datum = $kalender->planning[$j]['planning datum'];
                ?>
            </p>
            <h3><?php echo $datum; ?></h3>
            <p><?php echo $kalender->planning[$j]['tekst']; ?></p>
            <?php
            }
            ?>
        </div>
    </div>
    <div id="top">
        &nbsp;
    </div>
    <div id="bottom">
        &nbsp;<br/>
    </div>
    <div id="footer">
        KSA PARSIVAL | Jacob De Roorestraat 2, 2650 Edegem | All rights reserved
    </div>
</div>
</body>
</html>