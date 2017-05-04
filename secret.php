<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès</title>
    </head>
    <body>
        <?php

    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "")

    {
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    </body>

</html>
