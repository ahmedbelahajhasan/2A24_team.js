<?php
    include 'connect.php';
    $id_contrat=$_GET['updateid_contrat'];
    $sql ="select * from `contrat` where id_contrat=$id_contrat ";
    $result = mysqli_query ($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $nom_c=$row['nom_c'];
    $prenom_c=$row['prenom_c'];
    $email_c= $row['email_c'];
    $modePaiement_c= $row['modePaiement_c'];
    $date_c= $row['date_c'];
    $avance_c= $row['avance_c'];
    $reste_c= $row['reste_c'];
   
        

    if(isset($_POST['update']))
    {
        $nom_c=$_POST['nom_c'];
        $prenom_c=$_POST['prenom_c'];
        $email_c= $_POST['email_c'];
        $modePaiement_c= $_POST['modePaiement_c'];
        $date_c= $_POST['date_c'];
        $avance_c= $_POST['avance_c'];
        $reste_c= $_POST['reste_c'];
        
       

        if (empty($_POST['nom_c']))               
        {
            
            echo "<script>alert(\"le nom est vide\")</script>";

        } else if ((ctype_digit($_POST['nom_c'])))
        {
            echo "<script>alert(\"Indertiction d'utiliser un chiffre pour le nom\")</script>";
            
            
        }
        else if (empty($_POST['prenom_c']))                   
        { 
            echo "<script>alert(\"le prenom est vide\")</script>";
        } else if ((ctype_digit($_POST['prenom_c'])))
        {
            echo "<script>alert(\"Indertiction d'utiliser un chiffre pour le prenom\")</script>";
            
            
        }
       
        
        else if (empty($_POST['email_c']))                    
        { 
            echo "<script>alert(\"l'email est vide\")</script>";
        }
        else if (empty($_POST['modePaiement_c']))                    
        { 
            echo "<script>alert(\"le mode de paiement est vide\")</script>";
        }
        else if (empty($_POST['date_c']))                    
        { 
            echo "<script>alert(\"la date est vide\")</script>";
        }
        else if (empty($_POST['avance_c']))                    
        { 
            echo "<script>alert(\"l'avance est vide\")</script>";
        }
        else if (empty($_POST['reste_c']))                    
        { 
            echo "<script>alert(\"le reste est vide\")</script>";
        }
        else
     {
      $sql = "update `contrat` set id_contrat='$id_contrat', nom_c='$nom_c' , prenom_c='$prenom_c', email_c='$email_c', modePaiement_c='$modePaiement_c', date_c='$date_c', avance_c='$avance_c', reste_c='$reste_c' where id_contrat=$id_contrat";
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
    <!-- Bootstrap CSS -->
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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    
    <title>Modifier un contrat</title>
  </head>
  <h1 class="px-76 py-26 font-lato" style="margin-left: 41px;" >Modifier le contrat</h1>
  <body class ="bg-brown" style="margin-right: 139px;">
    <div class= "container my-5 max-width " style ="max-width: 336px;">
        <form  method= "post" >
            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Nom:</label>
                <input  type="text" class="form-control  " placeholder="Entrer le nom " name ="nom_c" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $nom_c;?> >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey" >Prénom:</label>
                <input type="text" class="form-control" placeholder="Entrer le prénom " name ="prenom_c" autocomplete = "off" 
                    style="margin-left: 122px;" value=<?php echo $prenom_c;?> >
        
            </div>
                    
            
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Email:</label>
                <input type="email"  class="form-control" placeholder="Entrer l'email " name ="email_c" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $email_c;?>>
        
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Mode de paiement:</label>
           <select name="modePaiement_c" multtiple="" style="margin-left: 183px;" value=<?php echo $modePaiement_c;?>>
            <option selected value ="choix">choissisez votre choix</option>
            <option value="Le chèque">Par chèque</option>
            <option value="Les cartes bancaires">Par cartes bancaires</option>
            <option value="Les espèces">Par espèces</option>
            </select>
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Date:</label>
                <input type="date"  class="form-control" placeholder="Entrer la date " name ="date_c" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $date_c;?>>
        
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Avance:</label>
                <input type="number"  class="form-control" placeholder="Entrer l'avance " name ="avance_c" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $avance_c;?>>
        
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Reste:</label>
                <input type="number"  class="form-control" placeholder="Entrer l'avance " name ="reste_c" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $reste_c;?>>
        
            </div>


           



            <button type="update" class=" container-end bg-brand-lightBrown text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 491px;
                " name= "update"  href= "display.php" >Modifier</button>
        </form>
        
    </div>

  </head>
  </html>