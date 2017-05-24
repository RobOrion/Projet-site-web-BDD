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
	</div>


	<div id="top">
		<img id = "fond" src = "/img/accueil.jpg"  height="600px"/>
		<img id = "favoris" src = "/img/photo.jpg"/>
	</div>

	<div id="conteneur">
	<section>
	<div id="section1">
		<center><h3><p>Créer son propre profil avec ses préférences :</br></h3>
				- Une grande communauté pour partager ses passions;</br>
				- Partager des photos, vidéos et réactions de nos réussites;</br>
				- Trouver des gens près de nous partageant les mêmes hobbies.</br>
			</p> </center>

	</section>

	<section>
	<div id="section2">
		<center><h3>Créer et trouver des évènements près de chez soi:</br></h3>
								- Il vous manque quelqu'un pour compléter votre équipe de foot ? Vous pouvez le trouver ici;</br>
								- Vous voulez prendre un cours de cuisine à domicile ? Créez votre annonce ici !;</br>
		</center></div>
	</section>

	<section>
	<aside>
		<center><h3> A propos des auteurs :</br></h3>
			<p>Nous sommes trois élèves ingénieurs en informatique à l'EISTI en région parisienne. A travers ce projet, nous voulons que les gens se retrouvent en fonction de leurs passions et de leurs centres d'intérets.</p>
			<img src="/img/tyty.jpg" width="20%"/> <img src="/img/alex.jpg" width="20%"/> <img src="/img/robin.jpg" width="20%"/></center>
	</aside>
	</section>
	</div>

<footer>
	<img src="/img/EISTI.jpg" width="10%"/>
	<center>
	<p><a href="#"> Chatelet Robin</a>
	<a href="#"> Hassan Alexandre</a>
	<a href="#"> Nguyen Terry</a></p>
	</center>
</footer>


</body>

</html>
