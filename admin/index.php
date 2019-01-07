<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>KSA PARSIVAL ONLINE - ADMIN</title>
</head>

<body>
<?php
if (isset($_COOKIE['ksa_admin'])) {
    header("Location: admin.php");
    exit;
} else {
    if (isset($_POST['submit'])) {
        if (empty ($_POST['gebruiker']) || empty ($_POST['wachtwoord'])) {
            echo 'Gelieve alles in te vullen. <br />';
            echo '<a href="index.php">Keer terug naar het login scherm.</a>';
        } else {
            if (isset($_POST['gebruiker']) && $_POST['gebruiker'] == "***REMOVED***" && isset($_POST['wachtwoord']) && $_POST['wachtwoord'] == "***REMOVED***") {
                setcookie('ksa_admin', 'true');
                echo 'Login geslaagd. <br />';
                echo '<a href="admin.php">Klik hier om verder te gaan.</a>';

            } else {
                echo 'Gebruikersnaam of wachtwoord zijn incorrect. <br />';
                echo '<a href="index.php">Keer terug naar het login scherm.</a>';
            }
        }
    } else {
        ?>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Gebruiker:</td>
                    <td><input type="text" name="gebruiker"/></td>
                </tr>
                <tr>
                    <td>Wachtwoord:</td>
                    <td><input type="password" name="wachtwoord"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="login"/></td>
                </tr>
            </table>
        </form>
        <?php
    }
}
ob_end_flush();
?>

</body>
</html>
