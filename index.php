<?php

require_once "connection.php";
require_once "function.php";

$con = new mysqli($servername,$username,$password,$databasename);
if($con->connect_error) die("erreur");


// récupération de toute les entrées 

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $username = $_POST["username"];
  $mdp = $_POST["mdp"];
  $email = $_POST["email"];

}


//analyse des entrées 

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

  Tutoriel PHP : Gestion d'un espace membre (refactorisation) -> pour la structuration du code en POO ?
  LIEN : https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database 
  https://www.youtube.com/watch?v=nb5BHPYbBBY
  
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
    <!-- corriger les names en faisant simplement formulaire -> dans le css on aura juste a faire .xxx .xxx c'est mieux  -->
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
    
