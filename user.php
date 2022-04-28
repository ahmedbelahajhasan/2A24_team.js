<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $numtel=$_POST['numtel'];
    $reclamation=$_POST['reclamation'];

    $sql="insert into `crud`(nom,email,numtel,reclamation)
    values('$nom','$email','$numtel','$reclamation')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data inserted successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
<!doctype html>
<html lang="en">
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
    <title>Crud</title>
  </head>
  <style>
</style>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="text-light">nom:</label>
    <input type="text" class="form-control"
    placeholder="entrer votre nom(entre 4 et 20 caracteres)" name="nom"  required pattern="[a-zA-Z-\.]{4,20}">
</div>
<div class="mb-3">
    <label class="text-light">email:</label>
    <input type="email" class="form-control"
    placeholder="entrer votre email" name="email" required>
</div>
<div class="mb-3">
    <label class="text-light" >numtel:</label>
    <input type="text" class="form-control" 
    placeholder="entrer votre numero telephone" name="numtel" required pattern="[0-9]{8,11}" >
</div>
<div class="mb-3">
    <label class="text-light">reclamation:</label>
    <input type="text" class="form-control"
    placeholder="entrer votre reclamation" name="reclamation" minlength="20"required>
</div>
  <button class="btn btn-warning" type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
</html>