<?php

require_once "register.php";

$username;
$password;
$tab;

//creation de table ut8 general ci voir comment procédé : https://stackoverflow.com/questions/27451095/create-mysql-table-in-php-with-utf8-unicode-ci verifier apres 
$table_users = "CREATE TABLE USER (

    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    mail VARCHAR(50),
    passwordd VARCHAR(50)

    ) DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
    ";



// recupération des entrées pour l'authentification
function recuperation_auth($a,$b){

    global $username,$password,$email;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $username = $a;
        $password = $b;
    }
    // echo $username , $password;
}


function analyse_register(){

    global $username,$password,$email;

    if( empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']) ){
        echo '<p>' ."username invalide". '</p>';
    }else{
        $username = $_POST['username'];
    }

    if( empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ){
        echo '<p>' ."email invalide". '</p>';
    }else{
        $email = $_POST["email"];
    }
    if( empty($_POST["password"]) || $_POST["password"] != $_POST["confirm_password"] ){
        echo '<p>' ."Vérifier le mot de passe". '</p>';
    }else{
        $password = $_POST["password"];
    }
    if( empty($_POST["confirm_password"]) ){
        echo '<p>' ."Vérifier le mot de passe". '</p>';
    }
    else{
        
        remplissage_user();
    }
}


//analyse des entrées 
function analyse_auth(){

    global $username,$password,$tab;
    
    //ici aussi modifier les paramètres 
    $tab = array("username"=>$_POST["username"],"password"=>$_POST["password"]);
    
    //ici revoir la paramètre de la condiftion -> mal ecrit -> ecrit $_post..
    if( empty($tab["username"])) {

        echo '<p>' ."entrer un nom d'utilisateur". '</p>';
    } 
    if (empty($tab["password"]) ){

        echo '<p>' ."entrer un mot de passe". '</p>';

    }else{

        echo "authentification réussite";
    }
}
    
//faire la requete direct dans le fichier register ?? page 253
function remplissage_user(){

    global $username,$password,$email;
    // $data ="SET NAMES utf8";
    $data = "INSERT INTO USER VALUES ( '$username','$email','$password');
    $req = $con->query($data);
    }