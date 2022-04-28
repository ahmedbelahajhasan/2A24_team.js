<?php
include 'connect.php';
$id=$_GET['modifierid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql); // execution requete sur la bd
$row=mysqli_fetch_assoc($result);// récupere la ligne suivant sous forme de tableau
$nom=$row['nom'];
$email=$row['email'];
$numtel=$row['numtel'];
$reclamation=$row['reclamation']; 


if(isset($_POST['submit'])){
   $nom=$_POST['nom'];
    $email=$_POST['email'];
    $numtel=$_POST['numtel'];
    $reclamation=$_POST['reclamation'];
   

    $sql="update `crud` set id=$id,nom='$nom',email='$email' ,numtel='$numtel',reclamation='$reclamation' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data updated successfully";
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

  <body>
    <div class="container my-5">
    <form method="post">
      
  <div class="mb-3">
    <label >nom</label>
    <input type="text" class="form-control"
    placeholder="entrer votre nom" name="nom"  required value=<?php echo $nom; ?>>
</div>
<div class="mb-3">
    <label >email</label>
    <input type="email" class="form-control"
    placeholder="entrer votre email" name="email" required value=<?php echo $email; ?>>
</div>
<div class="mb-3">
    <label >numtel</label>
    <input type="number" class="form-control"
    placeholder="entrer votre numero telephone" name="numtel" required value=<?php echo $numtel; ?>>
</div>
<div class="mb-3">
    <label >reclamation</label>
    <input type="text" class="form-control"
    placeholder="entrer votre reclamation" name="reclamation" required value=<?php echo $reclamation; ?>>
    </div>
  <button class="btn btn-warning" type="submit" class="btn btn-primary" name="submit">Modifier</button>
</form>
</div>
  </body>
</html>