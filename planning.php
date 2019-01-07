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
    <title>PLANNING</title>
    <meta name="description" content="Wat spelen we deze week?">
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
        <?php if (isset($_GET['id'])) { ?>
            <p><?php echo '<a href="files/maandbrieven/maandbrief_' . $_GET['id'] . '.pdf" target="_blank">Maandbrief</a>'; ?></p>
        <?php } ?>

        <?php
        $planning = simplexml_load_file("files/xml/planning.xml");
        if (isset($_GET['id'])){
        for ($i = 0;
        $i <= count($planning->banplanning);
        $i++){
        if ($planning->banplanning[$i]['id'] == $_GET['id']){
        $p1 = $planning->banplanning[$i]['p1'];
        $p2 = $planning->banplanning[$i]['p2'];
        $p3 = $planning->banplanning[$i]['p3'];
        $foto1 = $planning->banplanning[$i]['foto1'];
        $foto2 = $planning->banplanning[$i]['foto2'];
        ?>
        <div id="planning">
            <?php
            echo "<p>" . $p1 . "</p>";
            echo "<p>" . $p2 . "</p>";
            echo "<p>" . $p3 . "</p>";
            if ($foto1 != '' && $foto2 == ''){
            ?>
            <div id="foto_planning1">
                <div id="foto_planning_top1">&nbsp;</div>
                <div id="foto_planning_bot1">
                    <img src="<?php echo $foto1 ?>" id="foto_planning_sub1"/>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            onload = function () {
                var content_h = document.getElementById('content').offsetHeight;
                var bottom = document.getElementById('bottom');
                var footer = document.getElementById('footer');
                var foto_planning_sub1_h = document.getElementById('foto_planning_sub1').offsetHeight;
                foto_planning_bot1.style.height = foto_planning_sub1_h + 44 + 'px';
                var foto_planning_bot1_h = document.getElementById('foto_planning_bot1').offsetHeight;
                var foto_planning1_h = 14 + foto_planning_bot1_h + 44;
                if (content_h >= foto_planning1_h) {
                    bottom.style.top = content_h + 175 + 'px';
                    footer.style.top = content_h + 180 + 'px';
                } else {
                    content.style.height = foto_planning1_h + 10 + 'px';
                    bottom.style.top = foto_planning1_h + 175 + 10 + 'px';
                    footer.style.top = foto_planning1_h + 180 + 10 + 'px';
                }
            }
        </script>
        <?php
        break;
        }else if ($foto1 != '' && $foto2 != ''){
        ?>
        <div id="foto_planning1">
            <div id="foto_planning_top1">&nbsp;</div>
            <div id="foto_planning_bot1">
                <img src="<?php echo $foto1 ?>" id="foto_planning_sub1"/>
            </div>
        </div>
        <div id="foto_planning2">
            <div id="foto_planning_top2">&nbsp;</div>
            <div id="foto_planning_bot2">
                <img src="<?php echo $foto2 ?>" id="foto_planning_sub2"/>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        onload = function () {

            var content_h = document.getElementById('content').offsetHeight;
            var bottom = document.getElementById('bottom');
            var footer = document.getElementById('footer');

            var foto_planning_sub1_h = document.getElementById('foto_planning_sub1').offsetHeight;
            var foto_planning_sub2_h = document.getElementById('foto_planning_sub2').offsetHeight;
            foto_planning_bot1.style.height = foto_planning_sub1_h + 44 + 'px';
            foto_planning_bot2.style.height = foto_planning_sub2_h + 44 + 'px';
            var foto_planning_bot1_h = document.getElementById('foto_planning_bot1').offsetHeight;
            var foto_planning_bot2_h = document.getElementById('foto_planning_bot2').offsetHeight;
            var foto_planning1_h = 14 + foto_planning_bot1_h + 44;
            var foto_planning2_h = 14 + foto_planning_bot2_h + 44;
            var foto_planning_h = foto_planning1_h + foto_planning2_h - 165;
            if (content_h >= foto_planning_h) {
                bottom.style.top = content_h + 175 + 'px';
                footer.style.top = content_h + 180 + 'px';
            } else {
                content.style.height = foto_planning_h + 10 + 'px';
                bottom.style.top = foto_planning_h + 175 + 10 + 'px';
                footer.style.top = foto_planning_h + 180 + 10 + 'px';
            }


            var content_h = document.getElementById('content').offsetHeight;
            var bottom = document.getElementById('bottom');
            var footer = document.getElementById('footer');
            var foto_planning_sub1_h = document.getElementById('foto_planning_sub1').offsetHeight;
            var foto_planning_sub2_h = document.getElementById('foto_planning_sub2').offsetHeight;
            bottom.style.top = content_h + 175 + 'px';
            footer.style.top = content_h + 180 + 'px';
            foto_planning_bot1.style.height = foto_planning_sub1_h + 44 + 'px';
            foto_planning_bot2.style.height = foto_planning_sub2_h + 44 + 'px';
        }
    </script>
    <?php
    break;
    }else{
    ?>
</div>
<?php
}
}
}
}
?>
</div>
<div id="header">
    <h1>planning</h1>
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
                               href="https://www.facebook.com/pg/ksaparsival/photos/?ref=page_internal" target="_blank">foto's</a>
        </li>
    </ul>
</div>
<div id="submenu">
    <ul class="submenu_ul">
        <!--        	<li class="submenu_li"><a class="submenu_link" href="?id=piepers">piepers</a></li>
                    <li class="submenu_li">&nbsp;|&nbsp;</li>
        -->
        <li class="submenu_li"><a class="submenu_link" href="?id=sloebers">sloebers</a></li>
        <li class="submenu_li">&nbsp;|&nbsp;</li>
        <li class="submenu_li"><a class="submenu_link" href="?id=jongknapen">jongknapen</a></li>
        <li class="submenu_li">&nbsp;|&nbsp;</li>
        <li class="submenu_li"><a class="submenu_link" href="?id=knapen">knapen</a></li>
        <li class="submenu_li">&nbsp;|&nbsp;</li>
        <li class="submenu_li"><a class="submenu_link" href="?id=jonghernieuwers">jonghernieuwers</a></li>
        <li class="submenu_li">&nbsp;|&nbsp;</li>
        <!--           <li class="submenu_li"><a class="submenu_link" href="?id=plus16">plus16</a></li>
        -->        </ul>
</div>
<div id="foto2">&nbsp;</div>
<div id="bottom">
    &nbsp;<br/>
</div>
<div id="footer">
    KSA PARSIVAL | J.De Roorestraat 2, 2650 Edegem | All rights reserved
</div>
</div>
</body>
</html>