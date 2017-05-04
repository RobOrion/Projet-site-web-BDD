<!DOCTYPE html>
 <head>
  <title> Inscription </title>
<link rel="stylesheet" type="text/css" href="noninscrits.css" />
  	<meta charset="utf8"/>
  <script type="text/javascript" src="noninscrits.js"> </script>
 </head>

 <body>
   <div class="centre">
	<fieldset id="formu">
	<legend id="titre"> Inscription </legend>
	<form action="noninscrits2.php" method="post">
		<label> Votre Civilité :
			Monsieur : <input type="radio" id="monsieur" name="civil" value="monsieur"/>
		</label>
		<label>
			Madame : <input type="radio" id="madame" name="civil" value="madame"/>
		</label> <br/> <br/>
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

		<div id="case_supp"> </div> <br/>

		<label> Année de Naissance :
		<select name="a_naissance" class="select1">
		<?php
		for ($i=1950; $i<2001; $i++) {
			echo "<option value=\"$i\"> $i </option>";
		}
		?>
		</select>
		</label> <br/> <br/>

		<input type="submit" value="Envoyer" />

	</form>
	</fieldset>

   </div>
 </body>
</html>
