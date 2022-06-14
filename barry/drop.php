<?php
    $serveur = "localhost";
    $dbname = "maria_db";
    $user = "root";
    $pass = "";

    // // declaration de variables existante dans la table retard
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["telephone"];
    $compte_bancaire = $_POST["compte_bancaire"];
    $mail = $_POST["mail"];
    

    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




        //  On insère les données reçues
         $sth = $dbco->prepare("
         INSERT INTO participant(nom, prenom, adresse, telephone, compte_bancaire, mail)
        VALUES('$nom', '$prenom', '$adresse', '$telephone', '$compte_bancaire','$mail')");
        $sth->execute();
      
                  echo 'insertion validée';

   
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }

?>