<?php
    include 'connect.php';
    $id_carte=$_GET['updateid_carte'];
    $sql ="select * from `cartefidele` where id_carte=$id_carte ";
    $result = mysqli_query ($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email = $row['email'];
    $numero= $row['numero'];
    $point= $row['point'];

    if(isset($_POST['update']))
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
        }else if (strlen ($numero) != 8 )                    
        { 
            echo "<script>alert(\"le numero doit avoir 8 nombres \")</script>";
        }
        else if (empty($_POST['point']))                    
        { 
            echo "<script>alert(\"le point est vide\")</script>";
        }
        else
        {
            $sql = "update `cartefidele` set id_carte='$id_carte', nom='$nom' , prenom='$prenom' ,email='$email ',numero='$numero', point='$point' where id_carte=$id_carte";
        $result = mysqli_query ($con, $sql);
        if ($result)
        {
            header('location: display.php');
        }else
        {
            die(mysqli_error($con));
        }
        }         

    }
?>

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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Modify loyalty card </title>
  </head>
  <h1 class="px-76 py-26 font-lato text-white" style="margin-left: 41px;margin-top: 32px;" >Modify loyalty card</h1>
  <body class ="bg-brown" style="margin-right: 139px;">
    <div class= "container my-5 max-width " style ="max-width: 336px;">
        <form  method= "post" >
            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Name:</label>
                <input  type="text" class="form-control  " placeholder="Add name the client" name ="nom" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $nom;?> >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey" >Family name:</label>
                <input type="text" class="form-control" placeholder="Add family name of the client" name ="prenom" autocomplete = "off" 
                    style="margin-left: 122px;" value=<?php echo $prenom;?> >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Email:</label>
                <input type="email" class="form-control" placeholder="Add the email of the client" name ="email" autocomplete = "off" 
                    style="margin-left: 122px;"  value=<?php echo $email;?>>
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Phone number:</label>
                <input type="number "  maxlength = "8" class="form-control" placeholder="Add phone number of the client" name ="numero" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $numero;?>>
        
            </div>


            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Number of points:</label>
                <input type="number" class="form-control" placeholder="Add number of points" name ="point" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $point;?>>
        
            </div>

            <button type="update" class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 491px;
                " name= "update"  href= "display.php" >Modify</button>
        </form>
        
    </div>

   
  </body>
</html>