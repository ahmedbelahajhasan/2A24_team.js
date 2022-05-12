<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
      
        $type = $_POST['type'];
        $matricule=$_POST['matricule'];
        $prix = $_POST['prix'];
        $pourcentage= $_POST['pourcentage'];
        $id_cartefidelite= $_POST['id_cartefidelite'];
       if (empty($_POST['type']))               
        {
            
            echo "<script>alert(\"le type est vide\")</script>";

        }
        else if (empty($_POST['matricule']))                   
        { 
            echo "<script>alert(\"la matricule est vide\")</script>";
        } 
        else if (empty($_POST['prix']))                    
        { 
            echo "<script>alert(\"le prix est vide\")</script>";
        }
        else if (empty($_POST['pourcentage']))                     
        { 
            echo "<script>alert(\"le pourcentage est vide\")</script>";
        } else if (empty($_POST['id_cartefidelite']))                     
        { 
            echo "<script>alert(\"id_cartefidelite est vide\")</script>";
        }
         else
        {
            $sql = "insert into `offre` ( type, matricule, prix, pourcentage, id_cartefidelite) 
                values('$type','$matricule', '$prix', '$pourcentage', '$id_cartefidelite')";
            $result = mysqli_query ($con, $sql);
            if ($result)
            {
                //echo "Data inserted successfully";
                header('location: display.php');
            }else
            {
                die(mysqli_error($con));
            }
        }
       

    }
?>


<!doctype html>
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
    <style>

body
{
-webkit-font-smoothing : antialised;
-moz-osx-font-smoothing: grayscale;
margin: 0px;
font-family: 'Lato', sans-serif;

background-image: url('../images/cadre_mailing.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;


}
</style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Add an offer</title>
    </head>
   
    <h1 class="px-76 py-26 font-lato text-white" style="margin-left: 41px;margin-top: 32px;" >Add an offer</h1>
    <body class ="bg-brown" style="margin-right: 139px;">
 
    <div class= "container my-5 " style ="max-width: 336px;" >
   
        <form  method= "post" >
       

            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Type of car:</label>
                <input  type="text" class="form-control  " placeholder="Add the type of car" name ="type" 
                    autocomplete = "off" style="margin-left: 122px;" >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey" >Matricule of car:</label>
                <input type="text" class="form-control" placeholder="Add matricule of car" name ="matricule" 
                    autocomplete = "off" style="margin-left: 122px;" >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Price of car:</label>
                <input type="number" class="form-control" placeholder="Add the price of car" name ="prix" 
                    autocomplete = "off" style="margin-left: 122px;" >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Percentage of offers:</label>
                <input type="number" class="form-control" placeholder="Add the percentage of offers" name ="pourcentage" 
                    autocomplete = "off" style="margin-left: 122px;">
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Id of card:</label>
                <input type="number" class="form-control" placeholder="Add the id of card loyalty" name ="id_cartefidelite" 
                    autocomplete = "off" style="margin-left: 122px;">
        
            </div>

            <button type="submit" class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 491px; 
                " name= "submit"   >Submit</button> 
        </form>
    </div>

   
  </body>
</html>