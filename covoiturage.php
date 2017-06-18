<!DOCTYPE html>
<html>

<head>
  <title> Covoiturage </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="covoiturage.css"/>
</head>

<body>
  <header>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" >Accueil</a></li>
                            <li><a href="page_profils.php">Profils</a></li>
                            <li><a href="evenement.php">événements</a></li>
                            <li><a href="covoiturage.php">Covoiturage</a></li>
                            <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=AddSession">Contactez nous</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-div">
            <a href="espacemembre.php" class="btn btn-danger pull-right">S'inscrire</a>
            <a href="sign-in.php" class="btn btn-danger pull-right">Connexion</a>
        </div>
    </section>
    <div id="searchbar">

<h5>Rechercher un lieu</h5>
<form action="recherche_covoi.php" class="formulaire">
<input name="lieu" class="champ" type="text" placeholder="Entrez un lieu"/>
<input class="bouton" type="button" value="Rechercher"/>

</form>
</div>

    <center><h1> Trouvez quelqu'un avec qui y aller !</h1></center>


 <fieldset id="forum">
 <legend id="titre"> Proposer ses services </legend>
 <form method="post">
   <label>
     Nom : <input type="text" id="nom" name="nom" placeholer="Entrez un nom"/>
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
     e-mail : <input type="text" id="email" name="email" placeholder="Entrez votre adresse e-mail"/>

   </label> <br/> <br/>

   <label> Voiture :
        <input type="text" id="voiture" name="voiture" placeholder="Quelle voiture avez-vous ?"/>

     </label> <br/> <br/>

   <label>
     Nombre de places disponibles : <input type="int" id="places" name="places" placeholder="Nombre de places"/>

   </label> <br/> <br/>

   <label>
     Quelle heure ?  <input type="text" id="heure" name="heure" value="A quelle heure serez vous là ?"/>

   </label> <br/> <br/>

   <label>
     Quel prix ?  <input type="int" id="prix" name="prix" value="Combien de dédommagement ?"/>

   </label> <br/> <br/>

   <input type="submit" value="Envoyer"  <?php
   		include('fonction.php');
   		logged_only();
   	?> />

 </form>
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
