<?php
   include "connexion.php";
    if (isset($_POST['modifier']))
  { 
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $adresse = $_POST['adresse'];
      $telephone = $_POST['telephone'];
      $compte_bancaire = $_POST['compte_bancaire'];
      $mail = $_POST['mail'];
    

    
      // Create connection
      $pour = new PDO("mysql:host=localhost;dbname=maria_db","root","");
    
      // Check connection
      if ($pour->connect_error) 
       { 
        die("Connection failed: " . $pour->ATTR_ERRMODE);
       }

      $sql = "UPDATE participant SET nom='$nom', prenom='$prenom', adresse='$adresse',telephone='$telephone',compte_bancaire='$compte_bancaire', mail='$mail', WHERE nom=$nom";

      if ($pour->query($sql) === TRUE) 
      {
        echo "Mise à jour effectuée";
      } 
      else 
      {
        echo "Error updating record: " . $pour->error;
      }

      $pour->close();
    }
?>