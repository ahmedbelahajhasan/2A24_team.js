<?php 
include("connect.php"); 
if(isset($_GET['faq']))
{
$faq = strip_tags(mysqli_real_escape_string($con,$_GET['faq']));
}
if(isset($_POST['modifierr']))
{   $reponse = strip_tags(mysqli_real_escape_string($con,$_POST['reponse']));
    $sql="UPDATE `reponses` SET reponse='".$reponse."' WHERE id='".$faq."' LIMIT 1 ";
$res = mysqli_query($con,$sql) or die(mysqli_error($con));
header("Location:modifierr.php");
//echo "data inserted successfully";
exit();
}
if(isset($_POST['supprimerq']))
{$sql ="DELETE FROM reponses WHERE ID='".$faq."' LIMIT 1";
$res = mysqli_query($con,$sql) or die (mysqli_error($con));
header("Location:modifierr.php");
//echo "data inserted successfully";
exit();   }
?>
<!DOCTYPE html>
<html lang="en">
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
    <title>Q&A</title>
    <style type="text/css">
        .faq_holder{
            text-align: left;
            width:550px;
            margin-left:auto;
            margin-right:auto;
            padding:4px;
        }
        .faq {
            margin-bottom:10px;
        }
        
        </style>  


</head>
<body>
    <div align="center">
        <h1>Les reponses </h1>
        <p><a href="../template/index.php">Home</a>
        <p><a href="index.php">Q&A</a>
        <a href="ajouterr.php">Ajouter une reponse</a>
        <a href="modifierr.php">Modifier une reponse</a></p> 
        <h3>Modifier/Supprimer une Reponse <h3>
        <div class="faq_holder">
           
            <?php
            $sql ="SELECT * FROM reponses";
            $res = mysqli_query($con,$sql) or die (mysqli_error($con));
            if (mysqli_num_rows($res)>0) {
                while ($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                $reponse = $row ['reponse'];
                echo '<div class="faq"><form action="modifierr.php?faq='.$id.'" method="post">
                <span> reponse:<input type="text" name="reponse" size="65" value="'.$reponse.'"/><span><br/>
                <input type="submit" name="supprimerq" value="Supprimer Reponse"/> <input type="submit" name="modifierr" value="enregistrer les changemenents"/>
                </form></div>';
                }
            } else {
                echo "Pas de reponses a modifier pour le moment. ";
            } 
            
          
   
    ?>
</div>
</div>
    </body>