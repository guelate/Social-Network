<?php

//ameliorer ligne 4-15 -> classe 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Authentification";

// Create connection
$con = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if ($con->connect_error) {

  die("Connexion échouée");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $username = $_POST["username"];
  $mdp = $_POST["mdp"];
  $email = $_POST["email"];

}

// Apprendre MySQL (10/20) : Sélectionner des données, SELECT (video pour selectionner les données | app manipulation myssql)
// logique à faire : pour optimiser et eviter le bourer le cache voir comment appeler seulement les colonnes concernées -> la on appel tout faut améliorer

$req = mysqli_query($con,"SELECT * FROM connexion"); // requete (serveur , action)
$row = mysqli_num_rows($req); // récupère toute les lignes de la requête 


// if($_POST["validation"]){
  
//   //améliorer : mettre tout les champs dans un tab & si il y a plus de 2 champs vide -> envoyer " remplissez les champs "
//   //parcour et si il y a qu'il seul champs vide ? switcher et renvoyer sa phrase
//   if($username != NULL && $mdp != NULL & $email != NULL){
//     // header("Location:user.php");
//     echo "redirection";
//   }else{
//     if($username == NULL){
//       echo "entrer un username\n";
//     }
//     if($mdp == NULL){
//       echo "entrer un mot de passe\n";
//     }
//     if($email == NULL){
//       echo "entrer une email\n";
//     }
//   }
  
// }

?>


<!-- idee pour l'entrer de mot laisser type="text" et changer en type="mdp" pour masquer l'entrer -->

<!-- 
  LIEN : https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database 
-->


<!DOCTYPE html>

<html lang="en">

  <head>
    
  <meta charset="UTF-8" />

    <meta http-equiv="X_UA_Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css">

    <title>Connexion</title>

    
  </head>

  <body>

    <div class="container">

      <p>Connexion</p>

      <form action="" method="POST" class="container-formulaire">

        <div class="container-formulaire-username">
          <input type="text" name="username" id="username" placeholder="Identifiant" maxlength="10">
        </div>

        <div class="container-formulaire-password">
          <input type="password" name="password" id="password" placeholder="Mot de passe" maxlength="5">
        </div>
  
        <div class="container-forumulaire-validation">
          <input type="submit" value="Entrer !" name="validation">
        </div>

      </form>

    <p>Vous n'avez pas de compte <a href="register.php">Inscrivez-vous.</a></p>
    
  </body>
</html> 
    
