
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/Bootstrap/css/bootstrap.css">
    <title>ajout</title>
</head>
<body>
        
        <div class="card-header border container">
                <form action="insert.php" method="post">
                        <div class="container">
                                <h1 style="color: blue;" class="text-center border border-primary">Ajouter participant</h1>
                                <div class="row">
                                        <div class="col-md-6">
                                                <label for="">nom</label>
                                                <input class="form-control" name="nom" type="text">
                                        </div>
                                        <div class="col-md-6">
                                                <label for="">prenom</label>
                                                <input class="form-control" name="prenom" type="text">
                                        </div>
                                        <!-- <div class="col-md-3">
                                                <label for="">Age</label>
                                                <input class="form-control" type="text">
                                        </div> -->
                                        <!-- <div class="col-md-3">
                                                <label for="">profession</label>
                                                <input class="form-control" type="text">
                                        </div> -->
                                </div>
                                <div class="row">
                                        <!-- <div class="col-md-3">
                                                <label for="">sexe</label>
                                                <input class="form-control" name="" type="text">
                                        </div> -->
                                        <div class="col-md-6">
                                                <label for="">adresse</label>
                                                <input class="form-control" name="adresse" type="text">
                                        </div>
                                        <!-- <div class="col-md-3">
                                                <label for="">eta_civil</label>
                                                <input class="form-control" type="text">
                                        </div> -->
                                        <div class="col-md-6">
                                                <label for="">telephone</label>
                                                <input class="form-control" name="telephone" type="text">
                                        </div>
                                </div>

                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                <label for="">compte_bancaire</label>
                                <input class="form-control" name="compte_bancaire" type="text">
                                </div>
                                <div class="col-md-6">
                                <label for="">mail</label>
                                <input class="form-control" name="mail" type="text">
                                </div>
                                </div>
                                <button style="background-color: yellow; margin-top: 20px;" class="card " type="submit">Annuler</button>
                                <button style="background-color: blue ; margin-left: 950px;margin-top: -30px;" class="card" type="submit">envoyer</button>
                        </div>
  

                </form>
        </div>
</body>
</html>