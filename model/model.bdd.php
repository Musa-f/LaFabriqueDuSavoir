<?php
    $servername = 'localhost';
    $dbname = 'la_fabrique_du_savoir';
    $username = 'root';
    $password = '';

    try{
        $bdd = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    }
    catch(PDOExeption $e){
        echo $e->getMessage();
    }

?>