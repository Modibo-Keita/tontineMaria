<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../barry/asset/css/ajt_cotisation.css">
    <title>Document</title>
</head>
<body>
<fieldset>
    <h1>Ajouter cotisation</h1>
    
    <form action="insert.php" method="post">
        <div class="droite">
            <!-- <label for="">cotisation</label><br>
            <input type="text"><br><br><br> -->

        
        </div>
        <div class="gauche">
            <label for="">montant_cot</label><br>
            <input name="montant_cot" type="text"><br><br><br>
        </div>
        <div class="center">
            <label for="">date_de_cot</label><br>
            <label for=""></label><br>
            <input name="date_cot" type="text">
        </div>
        <a href="../barry/ajt_cotisation.html"><button class="annul" type="submit">Annuler</button></a>
       <a href="../barry/lis_cotisation.html"><button class="envoie" type="btn">Ajouter</button></a> 
        
    </form>
</fieldset> 
</body>
</html>