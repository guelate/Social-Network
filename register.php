<?php


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