<?php
include 'connect2.php';
$nom=$_GET['modifiernom'];
$sql="Select * from `commande` where nom=$nom";
$result=mysqli_query($con,$sql); // execution requete sur la bd
$row=mysqli_fetch_assoc($result);// récupere la ligne suivant sous forme de tableau

$nom=$row['nom'];
$mail=$row['mail'];
$num_c=$row['num_c'];
$date=$row['date']; 

if(isset($_POST['submit'])){
   $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $num_c=$_POST['num_c'];
    $date=$_POST['date'];

    $sql="UPDATE `commande` set nom=$nom,nom='$id_re',mail='$mail' ,num_c='$num_c',date='$date' where nom=$nom";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data UPDATE successfully";
        header('location:display2.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>commande</title>
  </head>
  <!-- <style>
body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> -->
  <body>
    <div class="container my-5">
    <form method="post">
      
  <div class="mb-3">
    <label >nom</label>
    <input type="text" class="form-control"
    placeholder="entrer votre nom" name="nom"  required value=<?php echo $nom; ?>>
</div>
<div class="mb-3">
    <label >mail</label>
    <input type="mail" class="form-control"
    placeholder="entrer votre mail" name="mail" required value=<?php echo $mail; ?>>
</div>
<div class="mb-3">
    <label >num_c</label>
    <input type="number" class="form-control"
    placeholder="entrer numero de commande " name="num_c" required value=<?php echo $num_c; ?>>
</div>
<div class="mb-3">
    <label >date</label>
    <input type="text" class="form-control"
    placeholder="entrer la date" name="date" required value=<?php echo $date; ?>>
    
</div>
  <button class="btn btn-warning" type="submit" class="btn btn-primary" name="submit">Modifier</button>
</form>
</div>
  </body>
</html>