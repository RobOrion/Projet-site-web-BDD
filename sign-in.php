<!DOCTYPE html>
  <html>
     <head>
         <meta charset="utf-8"/>
         <title>Sign in</title>
         <link rel="stylesheet" type="text/css" href="sign-in.css">
     </head>


     <body background = "/img/concert.jpg">
         <div id="bloc"><h1>Sign in </h1>
         <form action="secret.php" method="post">
               <div id=pseudo> Pseudo </div>
               <input type = "text" name = "pseudo"/>
               <div id=mdp> Mot de passe </div>
               <input type="password" name="mot_de_passe"/>
               <br>
               <input id = "valid" type="submit" value="Valider"/>
         </form>
     </body>
  </html>
