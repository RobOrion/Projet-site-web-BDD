<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=covoiturage','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$sql = 'SELECT *FROM covoiturage';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

while ($data = mysql_fetch_array($req)) {
      // on affiche les résultats

// Connexion
// Requête sql normale
// while
{
if (preg_match("/\b".$_POST['lieu']."b/i",$data['ville']))
{
    echo ' .$data['nom'].<br> </br>';
}
}
}
?>
