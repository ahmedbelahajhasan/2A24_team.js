<?php 
include("connect.php"); 
if(isset($_GET['faq']))
{
$faq = strip_tags(mysqli_real_escape_string($con,$_GET['faq']));
}
if(isset($_POST['modifierq']))
{   $question = strip_tags(mysqli_real_escape_string($con,$_POST['question']));
    $sql="UPDATE `questions` SET question='".$question."' WHERE id='".$faq."' LIMIT 1 ";
$res = mysqli_query($con,$sql) or die(mysqli_error($con));
header("Location:modifierq.php");
//echo "data inserted successfully";
exit();
}
if(isset($_POST['supprimerq']))
{$sql ="DELETE FROM questions WHERE ID='".$faq."' LIMIT 1";
$res = mysqli_query($con,$sql) or die (mysqli_error($con));
header("Location:modifierq.php");
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
        <h1>Les questions </h1>
        <p><a href="../template/index.php">Home</a>
        <p><a href="index.php">Q&A</a>
        <a href="ajouterq.php">Ajouter une question</a>
        <a href="modifierq.php">Modifier une question</a></p> 
        <h3>Modifier/supprimer une question <h3>
        <div class="faq_holder">
           
            <?php
            $sql ="SELECT * FROM questions";
            $res = mysqli_query($con,$sql) or die (mysqli_error($con));
            if (mysqli_num_rows($res)>0) {
                while ($row = mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                $question = $row ['question'];
                echo '<div class="faq"><form action="modifierq.php?faq='.$id.'" method="post">
                <span> Question:<input type="text" name="question" size="65" value="'.$question.'"/><span><br/>
                <input type="submit" name="supprimerq" value="Supprimer la question"/> <input type="submit" name="modifierq" value="enregistrer les changemenents"/>
                </form></div>';
                }
            } else {
                echo "Pas de questions a modifier pour le moment. ";
            } 
            
          
   
    ?>
</div>
</div>
    </body>