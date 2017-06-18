<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" href="letter_s.jpg"/>

    <title>SHARE</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
	<!-- Insertion du logo du site  -->
    <div class="site" >
        <div class="container">
            <div class="site-header">
                <button type="button" class="site-icone" data-toggle="collapse" data-target=".site-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="left-div" href="index.php">

                    <img src="img/letter_s.png" />
                </a>

            </div>
<!-- Boutons connexion et inscription -->
            <div class="right-div">
                <a href="espacemembre.php" class="btn btn-danger pull-right">S'inscrire</a>
                <a href="sign-in.php" class="btn btn-danger pull-right">Connexion</a>
            </div>
        </div>
    </div>
    <!-- Barre contenant les onglets  -->
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




<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}

$sql = 'SELECT nom,prenom,ville,code_postal,adresse,email,naissance,login, date FROM Profils';

$sql2 = 'SELECT statu date FROM Profils';

$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

while ($data = mysql_fetch_array($req)) {
      // on affiche les résultats

// Connexion
// Requête sql normale
// while
{
if (preg_match("/\b".$_POST['cherchenom']."b/i",$data[['prenom'],['nom']])&&($_SESSION['statu']==1))
{
    echo ' .$data['nom'].<br> </br>';
}else if(preg_match("/\b".$_POST['cherchenom']."b/i",$data[['prenom'],['nom']])&&($_SESSION['statu']==2)){
    echo ' .$data['nom'].<br> </br>';
    echo ' .$data['prenom'].<br> </br>';
    echo ' .$data['mail'].<br> </br>';
    echo ' .$data['a_naissance'].<br> </br>';
    echo ' .$data['adresse'].<br> </br>';
    echo ' .$data['ville'].<br> </br>';
    echo ' .$data['code'].<br> </br>';
    echo ' .$data['login'].<br> </br>';
}
}
}

?>


</body>
</html>
