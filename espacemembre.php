<!DOCTYPE html>
<html>

<head>
  <title> Espace membre </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="espacemembre.css"/>
</head>

<body>
  <header>
    <center><h1> Inscrivez vous !</h1></center>
  </header>

 <fieldset id="forum">
 <legend id="titre"> Inscription </legend>
 <form method="post">
   <label>
     Nom : <input type="text" id="nom" name="nom" value="Entrez un nom"/>
   </label> <br/> <br/>
   <label>
     Prénom : <input type="text" id="prenom" name="prenom" value="Entrez un prénom"/>
   </label> <br/> <br/>
   <label>
     Ville : <input type="text" id="ville" name="ville" value="Entrez une ville"/>
   </label> <br/> <br/>
   <label>
     Code Postal : <input type="text" id="code" name="code" value="Entrez un code postal"/>
   </label> <br/> <br/>
   <label>
     Adresse : <br/> <textarea rows="4" cols="40" name="adresse"> </textarea>
   </label>
   <label>
     e-mail : <input type="text" id="email" name="email" value="Entrez votre adresse e-mail"/>

   </label> <br/> <br/>

   <label> Date de Naissance :
        <input type="date" id="a_naissance" name="a_naissance" value="Entrez votre date de naissance"/>

     </label> <br/> <br/>

   <label>
     login : <input type="text" id="login" name="login" value="Choisissez un login"/>

   </label> <br/> <br/>

   <label>
     password : <input type="password" id="pass" name="pass" value="Choisissez un mot de passe"/>

   </label> <br/> <br/>

   <input type="submit" value="Envoyer" />

 </form>
 </fieldset>


<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$pass_hache = sha1($_POST['pass']);

$req = $bdd->prepare("INSERT INTO profils SET Nom = ?, Prénom=?, e-mail=?, Naissance=?, Adresse=?, Ville=?, Code Postal=? login=?, password=?");

$req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['a_naissance'], $_POST['adresse'], $_POST['ville'], $_POST['code'], $_POST['login'], $_POST['pass']]);

?>
<footer>
  <center><h3><a href="#">Contactez nous</a></h3></center>
</footer>
</body>

</html>
