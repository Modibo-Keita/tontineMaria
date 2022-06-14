

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Participant</title>
</head>
<body>
    <div class="container">
        <!-- faire d'une image un cercle et le centré -->
        <img src="../Maria/logos.png" class="rounded-circle mx-auto d-block" alt="" width="100px" height="90px">
    </div>
   <div class="container">
       <a href="../barry/ajouter_participant.php"> <button class="btn btn-primary float-start"><i class="fa fa-plus float-start"></i></button></a>
        <button class="btn btn-danger float-end"><i class="fa fa-xmark float-end"></i></button>
   </div>
   <div class="container text-center text-primary my-5 p-3 w-50 border border-primary">
       <h2>Liste des Participants</h2>
   </div>
   <?php
        $dbco = mysqli_connect("localhost","root","");
        $der = mysqli_select_db($dbco,'maria_db');

        $db= "SELECT * FROM participant";
         $run=mysqli_query($dbco,$db);
        ?>


   <table class="table table-striped container w-75">
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>telephone</th>
            <th>compte_Bancaire</th>
            <th>mail</th>
            <th>modifier</th>
            <th>supprimer</th>
            <th>infos</th>
        </tr>
        <?php
             if($run)
             {
                foreach($run as $row)

                { 
                
             ?>
        <tr>

            <!-- <?php echo var_dump($row);?> -->
            <td><?php echo $row ['nom'] ;?></td>
            <td><?php echo $row ['prenom'] ;?></td>
            <td><?php echo $row ['adresse'] ;?></td>
            <td><?php echo $row ['telephone'] ;?></td>
            <td><?php echo $row ['compte_bancaire'] ;?></td>
            <td><?php echo $row ['mail'] ;?></td>
            <td>a <i class="fa fa-pencil modifier" ></i></td>
            <td><i class="fa fa-trash-can"></i></td>
            <td><i class="fa fa-circle-info"></i></td>
         </tr>
         <?php 
                }
            }
           else{
            echo 'pas de donnees';
           }
           ?>
           

   </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>