<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $nom = $_POST['nom'];
        $prenom=$_POST['prenom'];
        $email = $_POST['email'];
        $numero= $_POST['numero'];
        $point= $_POST['point'];
        
        if (empty($_POST['nom']))               
        {
            
            echo "<script>alert(\"le nom est vide\")</script>";

        } else if ((ctype_digit($_POST['nom'])))
        {
            echo "<script>alert(\"Indertiction d'utiliser un chiffre pour le nom\")</script>";
            
            
        }
        else if (empty($_POST['prenom']))                   
        { 
            echo "<script>alert(\"le prenom est vide\")</script>";
        } else if ((ctype_digit($_POST['prenom'])))
        {
            echo "<script>alert(\"Indertiction d'utiliser un chiffre pour le prenom\")</script>";
            
            
        }
        else if (empty($_POST['email']))                    
        { 
            echo "<script>alert(\"l'email est vide\")</script>";
        }
        else if (empty($_POST['numero']))                     
        { 
            echo "<script>alert(\"le numero est vide\")</script>";
        }
        else if (empty($_POST['point']))                    
        { 
            echo "<script>alert(\"le point est vide\")</script>";
        }


        else
        {
            
    
            $sql = "insert into `cartefidele` (nom, prenom, email, numero, point) values('$nom','$prenom', '$email', '$numero', '$point')";
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
    
    background-image: url('../images/carr.png');
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

    <title>Ajouter une carte de fidélité</title>
    </head>
    <h1 class="px-76 py-26 font-lato text-white" style="margin-left: 41px;" >Ajouter une carte de fidélité</h1>
    <body class ="bg-brown" style="margin-right: 139px;">
    <div class= "container my-5 justify-center " style ="max-width: 336px;">
    <form  method= "post" >
            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-white  ">Nom:</label>
                <input  type="text" class="form-control " placeholder="Entrer le nom du client" name ="nom" autocomplete = "off" 
                    style="margin-left: 122px; ">
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-white " >Prénom:</label>
                <input type="text" class="form-control " placeholder="Entrer le prénom du client" name ="prenom" autocomplete = "off" 
                    style="margin-left: 122px;"  >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-white  ">Email:</label>
                <input type="email" class="form-control  " placeholder="Entrer l'email du client'" name ="email" autocomplete = "off" 
                    style="margin-left: 122px;" >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-white m ">Numéro de téléphone:</label>
                <input type="number" maxlength = "8" class="form-control " placeholder="Entrer le numéro du client" name ="numero" 
                    autocomplete = "off" style="margin-left: 122px;">
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-white ">Le nombre de point:</label>
                <input type="number" class="form-control " placeholder="Entrer le nombre de point" name ="point" autocomplete = "off" 
                    style="margin-left: 122px;">
        
            </div>


            <button type="submit" class=" container-end bg-brand-lightBrown text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 491px;
                " name= "submit"   >Submit</button>
        </form>
    </div>

   
  </body>
</html>