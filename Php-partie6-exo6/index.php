
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo6</title>
    </head>
    <body>
        <a href="index.php?building=12&amp;room=101">vérifier les paramètres de l'url</a>
        <?php 
            if (isset($_GET['building'])) {
                ?><p><?= 'le nombre de bâtiments est : ' . $_GET['building'] ?></p><?php
            }else {
                ?><p><?= 'le paramètre nombre de bâtiments n\'est pas définie'?></p><?php
            }
            if (isset($_GET['room'])) {
                ?><p><?= 'le nombre de pièces est : ' . $_GET['room'] ?></p><?php
            }else {
                ?><p><?= 'Le paramètre nombre de pièces n\'est pas définie' ?></p><?php
            }
        ?>
    </body>
</html>