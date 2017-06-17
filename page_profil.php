<!DOCTYPE html>
<html>
<head>
	<title> Site </title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="page_profil.css"/>
	<link rel="icon" href=".jpg"/>
</head>

<body>
	<?php 
		include('fonction.php');
		logged_only();
	?>
	<div id = "barre">
	<div id = "titre">
		<a href="site.php"> <img src="/img/letter_s.png" href="site.php" width="120%"/> </a>
	</div>
	
		<div class="right-div">
                <a href="espacemembre.php" class="btn btn-danger pull-right">S'inscrire</a>
                <a href="sign-in.php" class="btn btn-danger pull-right">Connexion</a>
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

	<div id="conteneur">
	
	<div class="bloc">
		<a href="evenement_page.php" class="lien2"> EVENEMENT
	</div>

	<div class="bloc">
		<a href="chat_page.php" class="lien2"> CHAT
	</div>

	<div class="bloc">
		<a href="info_page.php.php" class="lien2"> Informations Personnelles
	</div>

	<div class="bloc">
		<a href="accessoire_page.php" class="lien2"> Accessoires
	</div>

	<div class="bloc">
		<a href="aide_page.php" class="lien2"> Aide
	</div>
	</div>

	<footer>

	</footer>

</body>

</html>
