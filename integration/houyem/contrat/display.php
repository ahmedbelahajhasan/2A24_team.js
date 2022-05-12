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
    


</head>
<br> <br> <br>
<div class="flex items-center " >
        
        <button class="bg-brand-lightBrown text-white border-none rounded-full uppercase px-25 py-12 font-bold text-sm"
            style ="    margin-left: 1240px;"><a class ="text-white no-underline" 
             href= "../jon/index.html"  </a> Return</button>
             
    </div>
<body class="bg-brown">
    <div class ="container">

    <button class =" bg-orange border-none rounded-full
             px-25 py-12 font-bold text-sm "><a href = "user.php" class="text-white no-underline"  >Add a contract</a> 
            
             
        </button>
        
        <table class="table table-color " style ="margin-block: 18px;">
    <thead>
        <tr>
        <th scope="col">Identifier</th>
        <th scope="col">Name </th>
        <th scope="col">First name</th>
        <th scope="col">Email</th>
        <th scope="col">Payment method</th>
        <th scope="col">Date</th>
        <th scope="col">Advance</th>
        <th scope="col">Rest</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select *from `contrat`";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id_contrat = $row ['id_contrat'];
            $nom_c = $row['nom_c'];
            $prenom_c=$row['prenom_c'];
            $email_c= $row['email_c'];
            $modePaiement_c= $row['modePaiement_c'];
            $date_c= $row['date_c'];
            $avance_c= $row['avance_c'];
            $reste_c= $row['reste_c'];
            echo '<tr>
                    <th scope="row">'.$id_contrat.'</th>
                    <td>'.$nom_c.'</td>
                    <td>'.$prenom_c.'</td>
                    <td>'.$email_c.'</td>
                    <td>'.$modePaiement_c.'</td>
                    <td>'.$date_c.'</td>
                    <td>'.$avance_c.'</td>
                    <td>'.$reste_c.'</td>
                    
                    <td>
            
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="update.php?updateid_contrat='.$id_contrat.'" class="text-white no-underline" ">Modify</a></button>
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="delete.php?deleteid_contrat='.$id_contrat.'" class="text-white no-underline"  >Delete</a></button>
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