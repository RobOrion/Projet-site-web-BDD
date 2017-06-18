<!DOCTYPE html>
<html>
<head>
	<title> Site </title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="page_profil.css"/>
	<link rel="icon" href=".jpg"/>

	<link rel="stylesheet" href="chat.css"/>

	<!-- BOOTSTRAP CORE STYLE  -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONT AWESOME STYLE  -->
	<!--<link href="assets/css/font-awesome.css" rel="stylesheet" />-->
	<!-- CUSTOM STYLE  -->
	<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
	<?php
		include('fonction.php');
		logged_only();
	?>
	<div class="site" >
			<div class="container">
					<div class="site-header">
							<button type="button" class="site-icone" data-toggle="collapse" data-target=".site-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<a class="left-div" href="index.php">

									<img src="img/letter_s.png" width="120%" height="120%"/>
							</a>

					</div>
			</div>
	</div>
	<!-- LOGO HEADER END-->
	<section class="menu-section">
			<div class="container">
					<div class="row">
							<div class="col-md-12">
									<div class="navbar-collapse collapse ">
											<ul id="menu-top" class="nav navbar-nav navbar-right">
													<li><a href="index.php" >Accueil</a></li>
													<li><a href="page_profil.php">Profils</a></li>
													<li><a href="evenement.php">événements</a></li>
													<li><a href="covoiturage.php">Covoiturage</a></li>
													<li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession">Contactez nous</a></li>

											</ul>
									</div>
							</div>

					</div>
			</div>
	</section>


<h2>Vos evenements :</h2>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=evenements','root', '');

$sql = 'SELECT nom,prenom,ville,code_postal,adresse,email,activite,personnes,quand,heure,prix date FROM evenements';

?>

<ul>
          <li>Nom: <span><?= $_SESSION['nom']; ?></span></li>
           <li>Prenom: <span><?= $_SESSION['prenom']; ?></span></li>
           <li>email: <span><?= $_SESSION['mail']; ?></span></li>
           <li>nombre de personnes: <span><?= $_SESSION['personnes']; ?></span></li>
           <li>adresse: <span><?= $_SESSION['adresse']; ?></span></li>
           <li>ville: <span><?= $_SESSION['ville']; ?></span></li>
           <li>code postal: <span><?= $_SESSION['code']; ?></span></li>
           <li>date: <span><?= $_SESSION['quand']; ?></span></li>
					 <li>heure: <span><?= $_SESSION['heure']; ?></span></li>
					 <li>prix: <span><?= $_SESSION['prix']; ?></span></li>
</ul>




<?php

$bdd = new PDO('mysql:host=localhost;dbname=evenements','root', '');

$sql = 'SELECT nom,prenom,ville,code_postal,adresse,email,activite,personnes,quand,heure,prix date FROM evenements';

echo $_SESSION['nom'];
echo $_SESSION['prenom'];
echo $_SESSION['mail'];
echo $_SESSION['personnes'];
echo $_SESSION['adresse'];
echo $_SESSION['ville'];
echo $_SESSION['code'];
echo $_SESSION['quand'];
echo $_SESSION['heure'];
echo $_SESSION['prix'];



?>







</body>

</html>
