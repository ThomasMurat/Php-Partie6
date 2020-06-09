
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo4</title>
    </head>
    <body>
        <a href="index.php?language=PHP&amp;server=LAMP">vérifier les paramètres de l'url</a>
        <?php 
            if (isset($_GET['language'])) {
                ?><p><?= 'cette page est codé en : ' . $_GET['language'] ?></p><?php
            }else {
                ?><p><?= 'le paramètre language n\'est pas définie'?></p><?php
            }
            if (isset($_GET['server'])) {
                ?><p><?= 'votre serveur est géré par : ' . $_GET['server'] ?></p><?php
            }else {
                ?><p><?= 'Le paramètre server n\'est pas définie' ?></p><?php
            }
        ?>
    </body>
</html>