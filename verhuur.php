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
    <title>VERHUUR</title>
    <meta name="description" content="Wij verhuren ons materiaal, ervaring krijgt u er gratis bij!">
    <link rel="stylesheet" href="styles.css" type="text/css"/>
</head>

<body>

<script type="text/javascript">
    onload = function () {
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
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id == 'tenten') {
                echo "<p>De meeste zaken uit ons materialenbestand worden verhuurd. Hieronder wordt een overzicht gegeven. Voor informatie, prijsovereenkomsten en bestellingen kan u steeds Sander Ceuleers contacteren.
Sander Ceuleers | 0493/13.52.12 | <a class='link' href='mailto: sander.ceuleers@gmail.com'>E-mail</a>
</p>";

                echo "<h3>Polyvalente tent</h3>";
                echo "<p>Canadese tent van 10x5m (4 stuks beschikbaar)</p>";
                echo "<h3>Kathedraal</h3>";
                echo "<p>Canadese tent van 16x6m (1 stuk beschikbaar)</p>";
                echo "<h3>Frametent</h3>";
                echo "<p>Canadese tent van 5x5m met aluminium frame (1 stuk beschikbaar)</p>";
                echo "<h3>EHBO tent</h3>";
                echo "<p>Canadese ronde tent met een diameter van 5m (1 stuk beschikbaar)</p>";

            } elseif ($id == 'sjorbalken') {
                echo "<p>De meeste zaken uit ons materialenbestand worden verhuurd. Hieronder wordt een overzicht gegeven. Voor informatie, prijsovereenkomsten en bestellingen kan u steeds Sander Ceuleers contacteren.
Sander Ceuleers | 0493/13.52.12 | <a class='link' href='mailto: sander.ceuleers@gmail.com'>E-mail</a>
</p>";

                echo "<h3>Sjorbalken</h3>";
                echo "<p>We hebben een grote voorraad aan degelijke sjorbalken van 1m tot 7m.</p>";

            } elseif ($id == 'anderen') {
                echo "<p>De meeste zaken uit ons materialenbestand worden verhuurd. Hieronder wordt een overzicht gegeven. Voor informatie, prijsovereenkomsten en bestellingen kan u steeds Sander Ceuleers contacteren.
Sander Ceuleers | 0493/13.52.12 | <a class='link' href='mailto: sander.ceuleers@gmail.com'>E-mail</a>
</p>";

                echo "<h3>Bakplaat</h3>";
                echo "<p>Handige bakplaat om grote hoeveelheden te bakken (1 stuk beschikbaar)</p>";
                echo "<h3>Gasvuren</h3>";
                echo "<p>Stevige gasvuren die handig mee te nemen zijn (4 stuks beschikbaar)</p>";
                echo "<h3>Gasvuurtjes</h3>";
                echo "<p>Kleine gasbranders om in bv: tenten te gebruiken (2 stuks beschikbaar)</p>";
                echo "<h3>Gasflessen</h3>";
                echo "<p>Wij beschikken over butaan- en propaangas (meerdere stuks beschikbaar)</p>";
                echo "<h3>Generator</h3>";
                echo "<p>Wij beschikken over een PowerPlus 720W generator en een TopCraft 2800W generator</p>";
            }
        }
        ?>
    </div>
    <div id="header">
        <h1>verhuur</h1>
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
            <li class="menu_li"><a class="menu_link"
                                   href="https://www.facebook.com/pg/ksaparsival/photos/?ref=page_internal"
                                   target="_blank"">foto's</a></li>
        </ul>
    </div>
    <div id="submenu">
        <ul class="submenu_ul">
            <li class="submenu_li"><a class="submenu_link" href="?id=tenten">tenten</a></li>
            <li class="submenu_li">&nbsp;|&nbsp;</li>
            <li class="submenu_li"><a class="submenu_link" href="?id=sjorbalken">sjorbalken</a></li>
            <li class="submenu_li">&nbsp;|&nbsp;</li>
            <li class="submenu_li"><a class="submenu_link" href="?id=anderen">anderen</a></li>
        </ul>
    </div>
    <div id="foto3">&nbsp;</div>
    <div id="bottom">
        &nbsp;<br/>
    </div>
    <div id="footer">
        KSA PARSIVAL | Jacob De Roorestraat 2, 2650 Edegem | All rights reserved
    </div>
</div>
</body>
</html>