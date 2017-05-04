<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès</title>
    </head>
    <body>
        <?php
        try
{
    $bdd = new PDO('mysql:host=localhost;dbname=profils', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage())
}
$reponse = bdd-> query('SELECT password FROM profils')
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "$reponse")

    {
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    </body>

</html>
