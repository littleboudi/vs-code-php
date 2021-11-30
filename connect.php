<?php 
    //CONNECTION A LA BASE DE DONNEES:PDO
    define('SERVER' ,"sqlprive-pc2372-001.privatesql.ha.ovh.net:3306");
    define('USER' ,"cefiidev1106");
    define('PASSWORD' ,"77GqqA9m");
    define('BASE' ,"cefiidev1106");

    $connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE.";charset=UTF8", USER, PASSWORD);
    //on test un traitement 

    //connexion au serveur
    try 
    {
    $connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
    }
    //si  il y a erreur, on l'affiche
    catch (Exception $e)//variable e qui attrape l'erreur
    {
    echo 'Erreur : ' . $e->getMessage();//montrer l'erreur
    }

    

?>