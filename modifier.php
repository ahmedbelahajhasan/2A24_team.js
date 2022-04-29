<?php
include 'connect.php';
$id_res=$_GET['modifierid_res'];
$sql="Select * from `crud` where id_res=$id_res";
$result=mysqli_query($con,$sql); // execution requete sur la bd
$row=mysqli_fetch_assoc($result);// récupere la ligne suivant sous forme de tableau
$id_res=$row['id_res'];
$id_user=$row['id_user'];
$prix=$row['prix'];
$des=$row['des']; 

if(isset($_POST['submit'])){
   $id_res=$_POST['id_res'];
    $id_user=$_POST['id_user'];
    $prix=$_POST['prix'];
    $des=$_POST['des'];

    $sql="UPDATE `crud` set id_res=$id_res,id_user='$id_user' ,prix='$prix',des='$des' where id_res=$id_res";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data UPDATE successfully";
        header('location:display.php');
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

    <title>crud</title>
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
    <label >id_res</label>
    <input type="text" class="form-control"
    placeholder="entrer votre id_res" name="id_res"  required value=<?php echo $id_res; ?>>
</div>
<div class="mb-3">
    <label >id_user</label>
    <input type="id_user" class="form-control"
    placeholder="entrer votre id_user" name="id_user" required value=<?php echo $id_user; ?>>
</div>
<div class="mb-3">
    <label >prix</label>
    <input type="number" class="form-control"
    placeholder="entrer le prix " name="prix" required value=<?php echo $prix; ?>>
</div>
<div class="mb-3">
    <label >des</label>
    <input type="text" class="form-control"
    placeholder="entrer votre description" name="des" required value=<?php echo $des; ?>>
    
</div>
  <button class="btn btn-warning" type="submit" class="btn btn-primary" name="submit">Modifier</button>
</form>
</div>
  </body>
</html>