<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Chat</title>
        <link rel="stylesheet" href="chat.css"/>

        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME STYLE  -->
        <!--<link href="assets/css/font-awesome.css" rel="stylesheet" />-->
        <!-- CUSTOM STYLE  -->
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <style>
    form {
        text-align:center;
    }
    </style>

    <body>

      <div class="site" >
          <div class="container">
              <div class="site-header">
                  <button type="button" class="site-icone" data-toggle="collapse" data-target=".site-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="left-div" href="index.php">

                      <img src="/img/letter_s.png" width="120%" height="120%"/>
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






    <form id = "form" action="chat_post.php" method="post">
        <p>

        <label for="message">Message</label> :  <input type="text" name="message" id="message" />
        <input  class="btn btn-danger" type="submit" value="Envoyer" />
    </p>
    </form>

<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Chat;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT login, message FROM Chat ORDER BY ID DESC LIMIT 0, 10');


$sql = 'SELECT statu date FROM Profils';


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['login']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

    if($_SESSION['statu']==2)){
      ?><input type = "submit" action = "<?unset($donnees['message'])?>" value = "supprimer le message"> <?
    }
}
$reponse->closeCursor();

?>

<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare("SELECT login FROM profils");
$req->execute($_POST['login']);

?>

    </body>

</html>
