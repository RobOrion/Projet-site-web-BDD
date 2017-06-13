<!DOCTYPE html>
<html>

<head>
  <title> Evénements </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="evenement.css"/>
</head>

<body>
  <header>
	<center id="bigtitle"><h1> Evénement ! </h1></center>
  </header>

	<div id="searchbar">

	<center id="search"> Rechercher un événement : </center>
	<form action="recherche_even.php" class="formulaire">
		<input name="evenement" class="champ" type="text" placeholder="Entrez un événement"/>
		<input class="bouton" type="button" value="Rechercher"/>
	</form>
	</div>

 <fieldset id="forum">
 <legend id="title"> Créez un évènement ! </legend>
 <form method="post" id="formu">
   <label>
     Nom : <input type="text" id="nom" name="nom" placeholder="Entrez un nom"/>
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
     Adresse : <br/> <textarea id = "adresse" rows="4" cols="40" placeholder="adresse"> </textarea>
   </label>
   <label>
     E-mail : <input type="text" id="email" name="email" placeholder="Entrez votre adresse e-mail"/>

   </label> <br/> <br/>
   <label>
     Nom de l'activité : <input type="text" id="activite" name="activite" placeholder="Quelle activité voulez-vous faire ?"/>

   </label> <br/> <br/>

   <label> Quand ?
        <input type="date" id="quand" name="quand" placeholder="Quand l'événement aura-t-il lieu ?"/>

     </label> <br/> <br/>

   <label>
     Nombre de personnes minimum : <input type="int" id="personnes" name="personnes" placeholder="Nombre de places"/>

   </label> <br/> <br/>

   <label>
     Quelle heure ?  <input type="text" id="heure" name="heure" placeholder="A quelle heure aura lieu l'événement ?"/>

   </label> <br/> <br/>

   <label>
     Quel prix ?  <input type="int" id="prix" name="prix" placeholder="Quel prix par personne ?"/>

   </label> <br/> <br/>



   <!--MAP -->
   Lieu de votre évenement :
    <div id="map" style="width:700px;height:400px;background:red;"></div>

    <script>


var geocoder;
var map;
// initialisation de la carte Google Map de départ
function myMap() {
  geocoder = new google.maps.Geocoder();
  // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ
  var latlng = new google.maps.LatLng(51.5, -0.12);
  var mapOptions = {
    zoom      : 10,
    center    : latlng,
    mapTypeId : google.maps.MapTypeId.HYBRID
  }
  // map-canvas est le conteneur HTML de la carte Google Map
  map = new google.maps.Map(document.getElementById('map'), mapOptions);

  // Récupération de l'adresse tapée dans le formulaire
  var adresse = document.getElementById('adresse').value;
  geocoder.geocode( { 'address': adresse}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      // Récupération des coordonnées GPS du lieu tapé dans le formulaire
      var strposition = results[0].geometry.location+"";
      strposition=strposition.replace('(', '');
      strposition=strposition.replace(')', '');
      // Création du marqueur du lieu (épingle)
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location,
          title:"Votre évenement"
      });
    } else {
      alert('Adresse introuvable: ' + status);
    }
  });
}






    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkgcl2StPS0DYGR3EL-Ey9Y6Ae9Ez4FVI&callback=myMap"></script>








   <center><input type="submit" value="Envoyer" id="but"/></center>

 </form>
 </fieldset>


<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=evenements','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare("INSERT INTO evenements SET Nom = ?, Prénom=?, e-mail=?, personnes=?, Adresse=?, Ville=?, Code Postal=?, quand=?, heure=?, prix=?");

$req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['personnes'], $_POST['adresse'], $_POST['ville'], $_POST['code'], $_POST['quand'], $_POST['heure'], $_POST['prix']]);

?>
<footer>
  <center><h3><a href="#">Contactez nous</a></h3></center>
</footer>
</body>

</html>
