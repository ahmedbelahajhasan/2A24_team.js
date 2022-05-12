<?php
include 'connect.php';
if(isset($_POST['ajouterr'])){
   
    $id=$_POST['id'];
    $reponse=$_POST['reponse'];
    $sql="insert into `reponses`(id,reponse)
    values('$id','$reponse')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
       // header('location:display.php');
    }
    else{
        if (mysqli_errno($con) == 1062) 
        echo "Cet ID est déja utiliser  ";
    else
        die(mysqli_error($con));
    }
}
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
  </head>  

<body>
<div align="center">
<h1>Ajouter une nouvelle reponse </h1>
<p><a href="../template/index.php">Home</a>
        <p><a href="index.php">Q&A</a>
        <a href="ajouterr.php">Ajouter une Reponse</a>
        <a href="modifierr.php">Modifier/Supprimer une Reponse</a></p> 
<form action="ajouterr.php" method="post">
    Id:<input type="text" name="id" size="65"/><br/><br/>
    reponse:<input type="text" name="reponse" size="65"/><br/><br/>
    <input type="submit" name="ajouterr" value="ajouter une nouvelle reponse"/>
    </div>
</form>
</div>
</body>
</html>