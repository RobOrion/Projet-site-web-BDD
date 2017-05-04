<!DOCTYPE html>
<html>
 <head>
  <title>Exemple de formulaire</title>
<link rel="stylesheet" type="text/css" href="noninscrits.css" />
  	<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
  <script type="text/javascript" src="noninscrits.js"> </script>
 </head>

 <body>
   <div class="centre">
	<h1>Inscription réussie!</h1>
	<?php
		$recupCivil = $_POST['civil'];
		$recupNom = $_POST['nom'];
		$recupPrenom = $_POST['prenom'];
		$recupCivil = $_POST['civil'];
		$recupVille = $_POST['ville'];
		$recupAdresse = $_POST['adresse'];
		$recupA_naissance = $_POST['a_naissance'];
		if($recupNom != "" && $recupPrenom != "") { // si les saisies ne sont pas vides

		}
		echo "Merci $recupCivil $recupNom $recupPrenom, <br/>";
		echo "$recupVille <br/>";
		echo "$recupCode <br/>";
		echo "$recupAdresse <br/>";
		echo "$recupA_naissance <br/>";
	?>
   </div>
 </body>
</html>
