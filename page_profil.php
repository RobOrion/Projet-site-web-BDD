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


	<div id = "Profil">
		<a href="page_profil.php" id="lien1"> Profil </a>
	</div>
	</div>

	<div id="conteneur">

	<div class="bloc">
		<a href="evenement_page.php" class="lien2"> EVENEMENT
	</div>

	<div class="bloc">
		<a href="chat.php" class="lien2"> CHAT
	</div>

	<div class="bloc">
		<a href="info_page.php" class="lien2"> Informations Personnelles
	</div>

	</div>

	<footer>

	</footer>

</body>

</html>
