
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Php-Partie6-exo1</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean">Envoyer les paramètres</a>
        <p><?php
                if (isset($_GET['firstname'])) {
                    ?><p><?= 'votre prénoms est : ' . $_GET['firstname'] ?></p><?php
                }else {
                    ?><p><?= 'le paramètre prénom n\'est pas définie'?></p><?php
                }
                if (isset($_GET['lastname'])) {
                    ?><p><?= ' votre nom est : ' . $_GET['lastname'] ?></p><?php
                }else {
                    ?><p><?= 'Le paramètre nom n\'est pas définie' ?></p><?php
                }
            ?>
        </p>
    </body>
</html>