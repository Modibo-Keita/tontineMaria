<?php
// $nom= "mysql:host=localhost;dbname=maria_db";
// $username="root";
// $motdepass="";
try {
    $pour = new PDO("mysql:host=localhost;dbname=maria_db","root","");
    $pour->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion etablie"

} 
catch (PDOException $a) {
// echo "erreur :" .$a->getmessage();

}