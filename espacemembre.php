<!DOCTYPE html>
<html>

<head>
  <title> Espace membre </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="espacemembre.css"/>
</head>

<body>


  <header>
    <center> <img src="/img/letter_s.png" width="15%" height="15%"/>
    <h1> Inscrivez vous !</h1></center>
  </header>

 <fieldset id="forum">

 <form method="post">
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
     Adresse :<div id = "mondiv">
      <textarea rows="1" cols="40" name="adresse"> </textarea>   <img id = "im" src="/img/bonhome.jpg" width="30%" height="30%"/> </div>
   </label><br/> <br/>

<!--date de naissance -->
Date de Naissance :
<select>
 <option selected>01</option>
 <option>02</option>
 <option>03</option>
 <option>04</option>
 <option>05</option>
 <option>06</option>
 <option>07</option>
 <option>08</option>
 <option>09</option>
 <option>10</option>
 <option>11</option>
 <option>12</option>
 <option>13</option>
 <option>14</option>
 <option>15</option>
 <option>16</option>
 <option>17</option>
 <option>18</option>
 <option>19</option>
 <option>20</option>
 <option>21</option>
 <option>22</option>
 <option>23</option>
 <option>24</option>
 <option>25</option>
 <option>26</option>
 <option>27</option>
 <option>28</option>
 <option>29</option>
 <option>30</option>
 <option>31</option>
</select>


<select>
 <option selected> Janvier </option>
 <option> Février </option>
 <option> Mars </option>
 <option> Avril </option>
 <option> Mai </option>
 <option> Juin </option>
 <option> Juillet </option>
 <option> Août </option>
 <option> Septembre </option>
 <option> Octobre </option>
 <option> Novembre </option>
 <option> Décembre </option>
</select>



     <select>
       <option>1972</option>
       <option>1973</option>
       <option>1974</option>
       <option>1975</option>
       <option>1976</option>
       <option>1977</option>
       <option>1978</option>
      <option>1979</option>
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option selected>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1994</option>
      <option>1995</option>
     	<option>1996</option>
     	<option>1997</option>
     	<option>1998</option>
     	<option>1999</option>
     	<option>2000</option>
       <option>2001</option>
       <option>2002</option>
       <option>2003</option>
       <option>2004</option>
       <option>2005</option>
       <option>2006</option>
       <option>2007</option>
     </select> <br/> <br/>

   <label>
     Nom d'utilisateur : <input type="text" id="login" name="login" placeholder="Choisissez un nom"/>

   </label> <br/> <br/>

   <label>
     Mot de passe : <input type="password" id="pass" name="pass" placeholder="Choisissez un mot de passe"/>

   </label> <br/> <br/>

   <input type="submit" value="Confirmer" />

 </form>
 </fieldset>


<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=profils','root', '');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}


$pass_hache = sha1($_POST['pass']);

$req = $bdd->prepare("INSERT INTO profils SET Nom = ?, Prénom=?, e-mail=?, Naissance=?, Adresse=?, Ville=?, Code Postal=? login=?, password=?");

$req->execute([$_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['a_naissance'], $_POST['adresse'], $_POST['ville'], $_POST['code'], $_POST['login'], $_POST['pass']]);

?>
<footer>
  <center><h3><a href="#">Contactez nous</a></h3></center>
</footer>
</body>

</html>
