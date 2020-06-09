
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo2</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean">Je suis Jean Nemare</a>
        <p>
            <?php
                if (isset($_GET['age'])) {
                    ?><p><?= 'J\'ai ' . $_GET['age'] . 'ans!' ?></p><?php
                }else {
                    ?><p><?= 'Le paramètre age n\'est pas définie' ?></p><?php
                }
            ?>
        </p>
    </body>
</html>