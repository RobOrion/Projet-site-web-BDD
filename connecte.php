<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$req = 

if(!$req)
{
  echo 'Mauvais identifiant ou mot de passe !';
}
else {
  session_start();
  $_SESSION['Prénom'] = $resultat['Prénom'];
echo "Merci $_POST['prenom'] $_POST['nom'], <br/>";
echo "Vous êtes connectés !";
}

?>
