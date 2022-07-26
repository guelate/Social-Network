<?php

//creation de table ut8 general ci voir comment procédé : https://stackoverflow.com/questions/27451095/create-mysql-table-in-php-with-utf8-unicode-ci verifier apres 
$table_users = "CREATE TABLE USER (

    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    mail VARCHAR(50),
    passwordd VARCHAR(50)

    )";

