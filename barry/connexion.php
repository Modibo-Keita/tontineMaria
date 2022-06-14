<?php
$nom= "mysql:host=localhost;dbname=maria_db";
$username="root";
$motdepass="";
try {
    $pour = new PDO($nom,$username,$motdepass);
    echo "connexion etablie";
    
} 
catch (PDOException $a) {
echo "erreur :" .$a->getmessage();

}