
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo5</title>
    </head>
    <body>
        <a href="index.php?week=12">vérifier les paramètres de l'url</a>
        <?php 
            if (isset($_GET['week'])) {
                ?><p><?= 'Nous somme la semaine : ' . $_GET['week'] ?></p><?php
            }else {
                ?><p><?= 'le paramètre semaine n\'est pas définie'?></p><?php
            }
        ?>
    </body>
</html>