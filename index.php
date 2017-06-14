<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SHARE</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <!--<link href="assets/css/font-awesome.css" rel="stylesheet" />-->
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
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

                    <img src="/img/letter_s.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="espacemembre.php" class="btn btn-danger pull-right">S'inscrire</a>
                <a href="sign-in.php" class="btn btn-danger pull-right">Connexion</a>
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
	
	<div id="rech">
	
                        <h5>Rechercher un profil</h5>
                <form action="recherche_prof.php" class="formulaire">
               <input name="cherchenom" class="champ" type="text" placeholder="Entrez un nom"/>
                    <input class="bouton" type="button" value="Rechercher"/>

                </form>

	</div>

     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Un site pour vos centres d'intérêt !</h4>

                            </div>

        </div>

           <div class="row">

                 <center><div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">

                            <h3>Créer son propre profil avec ses préférences :</h3>
                            - Une grande communauté pour partager ses passions;</br>
 				- Partager des photos, vidéos et réactions de nos réussites;</br>
 - Trouver des gens près de nous partageant les mêmes hobbies.</br>
                        </div>
                    </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <h3>Créer et trouver des évènements près de chez soi:</h3>
                            - Il vous manque quelqu'un pour compléter votre équipe de foot ? Vous pouvez le trouver ici;</br>
- Vous voulez prendre un cours de cuisine à domicile ? Créez votre annonce ici !;</br>
                        </div>
                    </div></center>


        </div>
             <div class="row">

              <div class="col-md-8 col-sm-8 col-xs-12">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="/img/1.jpg" alt="" />

                        </div>
                        <div class="item">
                            <img src="/img/2.jpg" alt="" />

                        </div>
                        <div class="item">
                            <img src="/img/3.jpg" alt="" />

                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>

                 <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h3> A propos des auteurs :</h3>
                        </div>
                        <div class="panel-body chat-widget-main">
                            <div class="chat-widget-left">
                              Nous sommes trois élèves ingénieurs en informatique à l'EISTI en région parisienne. A travers ce projet, nous voulons que les gens se retrouvent en fonction de leurs passions et de leurs centres d'intérets.
                            </div>
                            <div class="chat-widget-name-left">
                              <img src="/img/tyty.jpg" width="20%"/>
                              <img src="/img/alex.jpg" width="20%"/>
                              <img src="/img/robin.jpg" width="20%"/>
                            </div>
                            <hr />
                        </div>

                    </div>
             </div>

                 </div>


             <center><div class="row">
                 <div class="col-md-4 col-sm-4 col-xs-12">
 <div class="panel panel-default">
                        <div class="panel-heading">
                           Il est peut-être temps de profiter du soleil !
                        </div>
                        <div class="panel-body text-center recent-users-sec">
<img class="img-thumbnail"/>
                        <a href="http://www.meteofrance.com/accueil">Va checker la météo !
                        <img src="/img/meteo.jpeg"/> </a>
                        </div>
     </div>
             </div>
           </div></center>

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2017 CHATELET Robin | HASSAN Alexandre | NGUYEN TERRY
                   <a href="http://eisti.fr/"> <img src="/img/eisti.png"/> </a>
                </div>

            </div>
        </div>
    </section>

</body>
</html>
