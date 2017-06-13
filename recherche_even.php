<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=evenements','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$sql = 'SELECT *FROM evenements';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

while ($data = mysql_fetch_array($req)) {
      // on affiche les résultats

// Connexion
// Requête sql normale
// while
{
if (preg_match("/\b".$_POST['evenement']."b/i",$data['activite']))
{
    echo ' .$data['activite'].<br> </br>';
}
}
}
?>
