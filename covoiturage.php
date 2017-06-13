<!DOCTYPE html>
<html>

<head>
  <title> Covoiturage </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="covoiturage.css"/>
</head>

<body>
  <header>
	<center id="bigtitle"><h1> Trouvez quelqu'un avec qui y aller ! </h1></center>
  </header>
    
	<div id="searchbar">

	<center id="search"> Rechercher un lieu : </center>
	<form action="recherche_covoi.php" class="formulaire">
		<input name="lieu" class="champ" type="text" placeholder="Entrez un lieu"/>
		<input class="bouton" type="button" value="Rechercher"/>

	</form>
	</div>

 <fieldset id="forum">
 <legend id="title"> Proposer ses services </legend>
 <form method="post" id="formu">
   <label>
     Nom : <input type="text" id="nom" name="nom" placeholder="Entrez un nom"/>
   </label> <br/> <br/>
   <label>
     Prénom : <input type="text" id="prenom" name="prenom" placeholder="Entrez un prénom"/>
   </label> <br/> <br/>
   <label>
     Ville : <input type="text" id="ville" name="ville" placeholder="Entrez une ville"/>
   </label> <br/> <br/>
   <label>
     Code Postal : <input type="text" id="code" name="code" placeholder="Entrez un code postal"/>
   </label> <br/> <br/>
   <label>
     Adresse : <br/> <textarea rows="4" cols="40" placeholder="adresse"> </textarea>
   </label>
   <label>
     E-mail : <input type="text" id="email" name="email" placeholder="Entrez votre adresse e-mail"/>

   </label> <br/> <br/>

   <label> Voiture :
        <input type="text" id="voiture" name="voiture" placeholder="Quelle voiture avez-vous ?"/>

     </label> <br/> <br/>

   <label>
     Nombre de places disponibles : <input type="int" id="places" name="places" placeholder="Nombre de places"/>

   </label> <br/> <br/>

   <label>
     Quelle heure ?  <input type="text" id="heure" name="heure" placeholder="A quelle heure serez-vous là ?"/>

   </label> <br/> <br/>

   <label>
     Quel prix ?  <input type="int" id="prix" name="prix" placeholder="Combien de dédommagement ?"/>

   </label> <br/> <br/>

   <center> <input type="submit" value="Envoyer" id="but"/> </center>

 </form>

</div>
 </fieldset>


<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=covoiturage','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare("INSERT INTO covoiturage SET Nom = ?, Prénom=?, e-mail=?, voiture=?, Adresse=?, Ville=?, Code Postal=?, places=?, heure=?, prix=?");

$req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['voiture'], $_POST['adresse'], $_POST['ville'], $_POST['code'], $_POST['places'], $_POST['heure'], $_POST['prix']]);

?>
<footer>
  <center><h3><a href="#">Contactez nous</a></h3></center>
</footer>
</body>

</html>
