<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$recupNom = $_POST['nom'];
$recupPrenom = $_POST['prenom'];
$recupEmail = $_POST['email'];
$recupA_naissance = $_POST['a_naissance'];
$recupAdresse = $_POST['adresse'];
$recupVille = $_POST['ville'];
$recupCode = $_POST['code'];
$recupLogin = $_POST['login'];
$pass_hache = sha1($_POST['pass']);

if($recupNom != "" && $recupPrenom != "") { // si les saisies ne sont pas vides

  $req = $bdd->prepare('INSERT INTO profils(Nom, Prénom, e-mail, Naissance, Adresse, Ville, Code Postal, login, password) VALUES (:nom,:prenom,:email,:a_naissance,:adresse,:ville,:code,:login,:motdepasse)');
  $req->execute(array(
    'Nom'=> $recupNom,
    'Prénom'=> $recupPrenom,
    'e-mail'=> $recupEmail,
    'Naissance'=> $recupA_naissance,
    'Adresse'=> $recupAdresse,
    'Ville'=> $recupVille,
    'Code Postal'=> $recupCode,
    'login'=> $recupLogin,
    'password'=> $pass_hache
  ))

}
$resulat = $req->fetch();

if (!$resulat)
{
  echo 'Mauvais identifiant ou mot de passe !';
}
else {
  session_start();
  $_SESSION['Prénom'] = $resultat['Prénom'];
echo "Merci $recupPrenom $recupNom, <br/>";
echo "Vous êtes connectés !";
}
?>
