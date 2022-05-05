<?php
    include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">





<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;900&family=Jost:wght@300&family=Lato:wght@400;700&family=Rubik+Microbe&display=swap" rel="stylesheet">
    <link href="../CSSFiles/button.css" rel="stylesheet">
    <link href="../CSSFiles/color.css" rel="stylesheet">
    <link href="../CSSFiles/place.css" rel="stylesheet">
    <link href="../CSSFiles/size.css" rel="stylesheet">
    <link href="../CSSFiles/text.css" rel="stylesheet">
    <link href="../CSSFiles/background.css" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<style>

body
{
-webkit-font-smoothing : antialised;
-moz-osx-font-smoothing: grayscale;
margin: 0px;
font-family: 'Lato', sans-serif;

background-image: url('../images/carr.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;


}
</style>

<br> <br>

<div class="flex items-center " >
        
        <button class="bg-brand-lightBrown text-white border-none rounded-full uppercase px-25 py-12 font-bold text-sm"
            style ="    margin-left: 1292px;"><a class ="text-white no-underline" 
             href= "../jon/index.html" </a> Retour</button>
</div>

    
<body class="bg-brown">
  
    <div class ="container ">

        <button class =" bg-orange border-none rounded-full
             px-25 py-12 font-bold text-sm "><a href = "user.php" class="text-white no-underline"  >Ajouter Offre</a> 
            
        
        </button>
      
        <table class="table table-color " style ="margin-block: 18px;">
       
    <thead>
        <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Type de voiture</th>
        <th scope="col">Matricule de la voiture</th>
        <th scope="col">Prix de la voiture</th>
        <th scope="col">Pourcentage de l'offre</th>
        <th scope="col">Identifiant de la carte de fidelité </th>
        <th scope="col">Opérations</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select *from `crud`";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id = $row ['id'];
            $type = $row['type'];
            $matricule=$row['matricule'];
            $prix = $row['prix'];
            $pourcentage= $row['pourcentage'];
            $id_cartefidelite= $row['id_cartefidelite'];
            echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$type.'</td>
                    <td>'.$matricule.'</td>
                    <td>'.$prix.'</td>
                    <td>'.$pourcentage.'</td>
                    <td>'.$id_cartefidelite.'</td>
                    <td>
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="update.php?updateid='.$id.'" class="text-white no-underline" ">Modifier</a></button>
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="delete.php?deleteid='.$id.'" class="text-white no-underline"  >Supprimer</a></button>
                    </td>
                    
                </tr>';
        }
    }

    ?>

    
    
    </tbody>
    </table>
    </div>

    
</body>

</html>