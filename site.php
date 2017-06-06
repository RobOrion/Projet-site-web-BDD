<!DOCTYPE html>
<html>
<head>

	<title> Site </title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="site.css"/>
	<link rel="icon" href=".jpg"/>

</head>

<body>
	<div id = "barre">
	<div id = "titre">
		<a href="site.php"> <img src="/img/letter_s.png" href="site.php" width="120%"/> </a>
	</div>

	<div id = "bouton">
		<a href="espacemembre.php">
		<input type="button" value="Insciption" style="width: 100%;"/>
		</a>
		<form action="sign-in.php">
	  	<input type="submit" value="Connexion"/>
		</form>
	</div>

	<div id = "barre2">
		<div id = "cherch">
			<i>Chercher un utilisateur :</i>
			<input type = "text" name = "utilisateur"/>
			<i>Chercher un évenement :</i>
			<input type = "text" name = "évenement"/>
			<input id = "valider" type="submit" value="Rechercher"/>
		</div>
	</div>


	<div id = "Profil">
		<a href="page_profil.php" id="lien1"> Profil </a>
	</div>
	</div> <!-- barre -->


	<img id = "fond" src = "/img/accueil.jpg"  height="600px"/>

	<!-- <div id="conteneur"> -->

	<div id="section1">
		<center> 
			<h3>Créer son propre profil avec ses préférences :</h3>
				- Une grande communauté pour partager ses passions;</br>
				- Partager des photos, vidéos et réactions de nos réussites;</br>
				- Trouver des gens près de nous partageant les mêmes hobbies.</br>
		</center>
	</div>

	<div id="section2">
		<center>
			<h3>Créer et trouver des évènements près de chez soi:</h3>
				- Il vous manque quelqu'un pour compléter votre équipe de foot ? Vous pouvez le trouver ici;</br>
				- Vous voulez prendre un cours de cuisine à domicile ? Créez votre annonce ici !;</br>
		</center>
	</div>

	<aside>
		<center>
			<h3> A propos des auteurs :</h3>
			Nous sommes trois élèves ingénieurs en informatique à l'EISTI en région parisienne. A travers ce projet, nous voulons que les gens se retrouvent en fonction de leurs passions et de leurs centres d'intérets.
			<img src="/img/tyty.jpg" width="20%"/>
			<img src="/img/alex.jpg" width="20%"/>
			<img src="/img/robin.jpg" width="20%"/>
		</center>
	</aside>

	<footer id="bas_page">
		<a href="http://eisti.fr"> <img src="/img/EISTI.jpg" width="10%"/> </a>
		<center>
			<a href="#"> Chatelet Robin</a>
			<a href="#"> Hassan Alexandre</a>
			<a href="#"> Nguyen Terry</a>
		</center>
	</footer>

</body>
</html>
