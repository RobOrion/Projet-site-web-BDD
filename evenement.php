<!DOCTYPE html>
<html>

<head>
  <title> Evénements </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="evenement.css"/>
</head>

<body>
  <header>
	<center id="bigtitle"><h1> Evénement ! </h1></center>
  </header>

	<div id="searchbar">

	<center id="search"> Rechercher un événement : </center>
	<form action="recherche_even.php" class="formulaire">
		<input name="evenement" class="champ" type="text" placeholder="Entrez un événement"/>
		<input class="bouton" type="button" value="Rechercher"/>
	</form>
	</div>

 <fieldset id="forum">
 <legend id="title"> Créez un évènement ! </legend>
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
   <label>
     Nom de l'activité : <input type="text" id="activite" name="activite" placeholder="Quelle activité voulez-vous faire ?"/>

   </label> <br/> <br/>

   <label> Quand ?
        <input type="date" id="quand" name="quand" placeholder="Quand l'événement aura-t-il lieu ?"/>

     </label> <br/> <br/>

   <label>
     Nombre de personnes minimum : <input type="int" id="personnes" name="personnes" placeholder="Nombre de places"/>

   </label> <br/> <br/>

   <label>
     Quelle heure ?  <input type="text" id="heure" name="heure" placeholder="A quelle heure aura lieu l'événement ?"/>

   </label> <br/> <br/>

   <label>
     Quel prix ?  <input type="int" id="prix" name="prix" placeholder="Quel prix par personne ?"/>

   </label> <br/> <br/>

   <center><input type="submit" value="Envoyer" id="but"/></center>

 </form>
 </fieldset>


<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=evenements','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare("INSERT INTO evenements SET Nom = ?, Prénom=?, e-mail=?, personnes=?, Adresse=?, Ville=?, Code Postal=?, quand=?, heure=?, prix=?");

$req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['personnes'], $_POST['adresse'], $_POST['ville'], $_POST['code'], $_POST['quand'], $_POST['heure'], $_POST['prix']]);

?>
<footer>
  <center><h3><a href="#">Contactez nous</a></h3></center>
</footer>
</body>

</html>
