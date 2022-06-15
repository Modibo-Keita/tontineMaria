

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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


        <div class="modal modal-lg fade" id="modifier" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
            <!-- Modal Header -->
                     <div class="modal-header">
                     <h5 class="modal-title">Modification</h5>
                         <button type="button" class="close" data-bs-dismiss="modal">×</button>
                    </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="modification.php" method="POST">

                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input type="nom" required="required" name="nom" class="form-control" id="nom" placeholder="Saississez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">prenom</label>
                        <input type="prenom" required="required" name="prenom" class="form-control" id="prenom" placeholder="Entrez votre prenom">
                    </div>
                    <div class="form-group">
                        <label for="adresse">adresse</label>
                        <input type="text" required="required" name="adresse" class="form-control" id="adresse" placeholder="Entrez votre adresse">
                    </div>
                    <div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="number" required="required" name="telephone" class="form-control" id="telephone" placeholder="Entrez votre numero">
                    </div>
                    <div class="form-group">
                        <label for="compte_bancaire">compte_bancaire</label>
                        <input type="number" required="required" name="compte_bancair" class="form-control" id="compte_bancaire" placeholder="Entrez le numero de votre compte bancaire">
                    </div>
                    <div class="form-group">
                        <label for="mail">mail</label>
                        <input type="text" required="required" name="mail" class="form-control" id="mail" placeholder="Entrez votre mail">
                    </div>
                    <div class="modal-footer pied-modal justify-content-around">
                        <button class="btn-iscription" type="reset" data-dismiss="modal" >Annuller</button>
                        <button class="btn-iscription" type="submit"> Soumettre</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>
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

            
            <td><?php echo $row ['nom'] ;?></td>
            <td><?php echo $row ['prenom'] ;?></td>
            <td><?php echo $row ['adresse'] ;?></td>
            <td><?php echo $row ['telephone'] ;?></td>
            <td><?php echo $row ['compte_bancaire'] ;?></td>
            <td><?php echo $row ['mail'] ;?></td>
            <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modifier " class="editbtn">
                    <i class="fa fa-pencil" ></i>
                </button>
            </td>
            <td><a href="suppression.php?id=<?php echo $row ['id_part'] ?>"><i class="fa fa-trash-can"></i></a></td>
            <td><i class="fa fa-circle-info "></i></td>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      

    <script>
        
            $(document).ready(function()

        {
            $('.editbtn').on('click', function(){
                $('#modifier').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children('td').map(function(){
                    return $(this).text();
                }).get();

                console.log(data);


                $('#nom').val(data[0]);
                $('#prenom').val(data[1]);
                $('#adresse').val(data[2]);
                $('#telephone').val(data[3]);
                $('#compte_bancaire').val(data[4]);
                $('#mail').val(data[5]);
                
            })
        })

      









    </script>


</body>
</html>