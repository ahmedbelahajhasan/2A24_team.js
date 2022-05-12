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
            style ="    margin-left: 1292px;"><a class ="text-white no-underline" 
             href="../jon/index.html">   Return </a> </button>
             
    </div>

<body class="bg-brown">
   
    
    
    <div class ="container ">

        <button class =" bg-orange border-none rounded-full
             px-25 py-12 font-bold text-sm "><a href = "user.php" class="text-white no-underline"  >Add loyalty card</a> 
            
             
        </button>
      
        <table class="table table-color " style ="margin-block: 18px;">
       
    <thead>
        <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Family name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col">Number of points</th>
        <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $sql="Select *from `cartefidele`";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $id_carte = $row ['id_carte'];
            $nom = $row['nom'];
            $prenom=$row['prenom'];
            $email = $row['email'];
            $numero= $row['numero'];
            $point= $row['point'];
            echo '<tr>
                    <th scope="row">'.$id_carte.'</th>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$email.'</td>
                    <td>'.$numero.'</td>
                    <td>'.$point.'</td>
                    <td>
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="update.php?updateid_carte='.$id_carte.'" class="text-white no-underline" ">Modify</a></button>
                        <button class="bg-orange border-none rounded-full
                        px-25 py-12 font-bold text-sm "><a href="delete.php?deleteid_carte='.$id_carte.'" class="text-white no-underline"  >Delete</a></button>
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