<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    $sql ="select * from `partenaire` where id=$id ";
    $result = mysqli_query ($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $adresse=$row['adresse'];
    $email= $row['email'];
    $description=$row['description'];
   
        

    if(isset($_POST['update']))
    {
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $adresse= $_POST['adresse'];
        $email= $_POST['email'];
        $description= $_POST['description'];
       
        
        
       

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
       
        else
     {
      $sql = "update `partenaire` set nom='$nom' , prenom='$prenom' , adresse='$adresse' , email='$email' , description='$description' where id=$id";
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

<?php 
include 'connect.php';
if(isset($_POST['btnsubmit']))
{
   
    $nom=$_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $email= $_POST['email'];
    $description= $_POST['description'];

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
    <link rel="stylesheet" href="notification.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

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
    
    background-image: url('../images/cadre_mailing.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;


}
</style>

    
    <title>Modify the partner</title>
  </head>
  <h1 class="px-76 py-26 font-lato text-white" style="margin-left: 41px;margin-top: 32px;" >Modify the partner</h1>
  <body class ="bg-brown" style="margin-right: 139px;">
    <div class= "container my-5 max-width " style ="max-width: 336px;">
        <form  method= "post" >
            <div class="form-group container-start width-input " >
                <label style="font-size: 20px; margin-block: 18px; " class=" text-grey  ">Name:</label>
                <input  type="text" class="form-control  " placeholder="Enter name " name ="nom" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $nom;?> >
        
            </div>
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey" >First name:</label>
                <input type="text" class="form-control" placeholder="Enter first name " name ="prenom" autocomplete = "off" 
                    style="margin-left: 122px;" value=<?php echo $prenom;?> >
        
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Adress:</label>
                <input type="text" class="form-control" placeholder="Enter adress" name ="adresse" autocomplete = "off" 
                    style="margin-left: 122px;"  value=<?php echo $adresse;?>>
        
            </div>
                    
            
            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Email:</label>
                <input type="email"  class="form-control" placeholder="Enter email " name ="email" autocomplete = "off" 
                    style="margin-left: 122px;"value=<?php echo $email;?>>
        
            </div>

            <div class="form-group  container-start width-input ">
                <label style="font-size: 20px; margin-block: 18px;" class=" text-grey">Description:</label>
           <select name="description" multtiple="" style="margin-left: 14px;">
               
            <option selected value ="choix">choose your choice</option>
            <option value="Privée">Private</option>
            <option value="Public">Public</option>
            </select>
            </div>
 
           
            <button type="submit" class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato " style=" margin-left: 403px;
                " name= "btnsubmit">Generate QR code</button>

            <button type="update" class=" container-end bg-dark text-white border-none rounded-full my-5 px-25 py-12 font-lato "  style=" margin-left: 403px;
                " name= "update"  href= "display.php" >Modify</button>

    <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">The partner has been successfully modified!</span>
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
        include('C:/xampp/htdocs/web/phpqrcode/qrlib.php');
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
          $filename = $PNG_TEMP_DIR . 'test' .
          md5($codeString) . '.png';
          QRcode::png($codeString, $filename);
          echo '<img src ="' . $PNG_TEMP_DIR . 
          basename($filename). '" /><hr/>';
        }
        ?>
        
    </div>

  </head>
  </html>