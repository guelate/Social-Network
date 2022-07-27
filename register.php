<?php

require_once "connection.php";
require_once "function.php";

// vlr utf8  pour les tables voir comment procédé : https://stackoverflow.com/questions/27451095/create-mysql-table-in-php-with-utf8-unicode-ci et verifier apres 

$con = new mysqli($servername,$username,$password,$databasename);
if($con->connect_error) die("erreur");

//création de la table user 
$resul = $con->query($table_users);
if(!resul) die("echec de la création de la table");

if(isset($_POST["validation"])){
  analyse_register();
}

// remplissage_user($databasename);



?>


<!-- idee pour l'entrer de mot laisser type="text" et changer en type="mdp" pour masquer l'entrer -->
<!DOCTYPE html>

<html lang="en">

  <head>
    
  <meta charset="UTF-8" />

    <meta http-equiv="X_UA_Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="register.css">

    <title>Inscription</title>

    
  </head>

  <body>
    
  <div class="container">

    <p>Inscription</p>
    
    <form action="" method="POST" class="container-formulaire">

        <div class="container-formulaire-username">
          <input type="text" name="username" id="username" placeholder="Identifiant" maxlength="10">
        </div>

        <div class="container-formulaire-email">
          <input type="email" name="email" id="email" placeholder="email" maxlength="30">
        </div>

        <div class="container-formulaire-password">
          <input type="password" name="password" id="password" placeholder="Mot de passe" maxlength="5">
        </div>

        <div class="container-formulaire-confirm_password">
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmez votre mot de passe" maxlength="5">
        </div>
  
        <div class="container-forumulaire-validation">
          <input type="submit" value="Entrer !" name="validation">
        </div>

      </form>

    <p>Vous avez un compte <a href="index.php">Connectez-vous.</a></p>
    
  </body>
</html> 