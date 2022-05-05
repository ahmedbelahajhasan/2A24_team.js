<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
       
        $nom=$_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse= $_POST['adresse'];
        $email= $_POST['email'];
        $description= $_POST['description'];
        //$id_contrat= $_POST['id_contrat'];
       
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
        
        else if (empty($_POST['adresse']))                     
        { 
            echo "<script>alert(\"l'adresse est vide\")</script>";
        }
        else if (empty($_POST['email']))                    
        { 
            echo "<script>alert(\"l'email est vide\")</script>";
        }
        else if (empty($_POST['description']))                    
        { 
            echo "<script>alert(\"la description est vide\")</script>";
        }
        /*else if (empty($_POST['id_contrat']))                    
        { 
            echo "<script>alert(\"l'identifiant du contrat est vide\")</script>";
        }*/
        else
        {
    
           
        $sql = "insert into `crud` (nom, prenom, adresse, email, description) values('$nom', '$prenom', '$adresse', '$email', '$description')";
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

<?php 
include 'connect.php';
if(isset($_POST['btnsubmit']))
{
   
    $nom=$_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $email= $_POST['email'];
    $description= $_POST['description'];
    //$id_contrat= $_POST['id_contrat'];
}
?>


<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" href="notification.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      
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


    <title>Ajouter un partenaire</title>
  </head>
  <h1 class="px-76 py-26 font-lato" style="margin-left: 41px;" >Ajouter le partenaire</h1>
  <body class ="bg-brown" style="margin-right: 139px;">
    <div class= "container my-5 max-width " style ="max-width: 336px;">
        <form  method= "post" >
            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Nom:</label>
                <input  type="text" class="form-control  " placeholder="Entrer le nom " name ="nom" autocomplete = "off" 
                    style="margin-left: 122px;" >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey" >Prénom:</label>
                <input type="text"  class="form-control" placeholder="Entrer le prénom " name ="prenom" autocomplete = "off" 
                    style="margin-left: 122px;"  >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Adresse:</label>
                <input type="text" class="form-control" placeholder="Entrer l'adresse" name ="adresse" autocomplete = "off" 
                    style="margin-left: 122px;"  >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Email:</label>
                <input type="email" class="form-control" placeholder="Entrer l'email " name ="email" autocomplete = "off" 
                    style="margin-left: 122px;">
        
            </div>


          

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Description:</label>
           <select name="description" multtiple="" style="margin-left: 14px;" >
            <option selected value ="choix">choissisez votre choix</option>
            <option value="Privée">Privée</option>
            <option value="Public">Public</option>
            </select>
            </div>

          <!--  <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Id_contrat:</label>
                <input type="number" class="form-control" placeholder="Entrer l'identifiant du contrat " name ="id_contrat" autocomplete = "off" 
                    style="margin-left: 122px;">
        
            </div>-->

           

            <button type="submit" class=" container-end bg-brand-lightBrown text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 480px;
                " name= "btnsubmit">Generate QR code</button>

            <button type="submit"  style=" margin-left: 491px;" name= "submit"   >Submit</button>
                
            <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">Le partenaire a été ajouté avec succées!</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
      <script>
         $('button').click(function(){
           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
         });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
      </script>



        </form>
        
        <?php
        include('E:/xampp/htdocs/web/phpqrcode/qrlib.php');
        $PNG_TEMP_DIR ='temp/';
        if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
        $filename = $PNG_TEMP_DIR . 'test.png';
        if (isset($_POST["btnsubmit"]))
        {
          $codeString = $_POST["nom"] . "\n";
          $codeString .= $_POST["prenom"] . "\n";
          $codeString .= $_POST["adresse"] . "\n";
          $codeString .= $_POST["email"] . "\n";
          $codeString .= $_POST["description"] . "\n";
         // $codeString .= $_POST["id_contrat"] . "\n";
          $filename = $PNG_TEMP_DIR . 'test' .
          md5($codeString) . '.png';
          QRcode::png($codeString, $filename);
          echo '<img src ="' . $PNG_TEMP_DIR . 
          basename($filename). '" /><hr/>';
        }
        ?>
        
    </div>
  </body>
</html>