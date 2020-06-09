
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo3</title>
    </head>
    <body>
        <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">vérifier les paramètres de l'url</a>
        <?php 
            if (isset($_GET['startDate'])) {
                ?><p><?= 'ça a commencé le : ' . $_GET['startDate'] ?></p><?php
            }else {
                ?><p><?= 'le paramètre startDate n\'est pas définie'?></p><?php
            }
            if (isset($_GET['endDate'])) {
                ?><p><?= 'ça s\'est terminé le : ' . $_GET['endDate'] ?></p><?php
            }else {
                ?><p><?= 'Le paramètre endDate n\'est pas définie' ?></p><?php
            }
        ?>
    </body>
</html>