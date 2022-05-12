<?php
include 'connect.php';

?>



<script type="text/javascript">     
function imprimer() {    
	var imprimer = document.getElementById('imprimer');
	var popupcontenu = window.open('', '_blank');
	popupcontenu.document.open();
	popupcontenu.document.write('<html><body onload="window.print()">' + imprimer.innerHTML + '</html>');
	popupcontenu.document.close();
}
</script>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
      <body onload="window.print()">

body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    <title>crud</title>
  </head>
  <body>
      <div class="container">
          <button class="btn btn-warning my-5"><a href="user.php"
              class="text-light">Ajouter une des</a>
</button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id_res</th>
      <th scope="col">id_user</th>
      <th scope="col">prix</th>
      <th scope="col">des</th>
    </tr>
  </thead>
  <tbody>
      <?php
$sql="Select * from `reservation`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $id_res=$row['id_res'];
        $id_user=$row['id_user'];
        $prix=$row['prix'];
        $des=$row['des'];
        echo ' <tr>
        <td>'.$id_res.'</td>
        <td>'.$id_user.'</td>
        <td>'.$prix.'</td>
        <td>'.$des.'</td>
        <td>
        <button class="btn btn-warning"><a href="modifier.php?modifierid_res='.$id_res.'" class="text-light">modifier</a></button>
        <button class="btn btn-danger"><a href="supprimer.php?supprimerid_res='.$id_res.'" class="text-light">supprimer</a></button>
    </td>
      </tr>';
    }
}

      ?>
     
  </tbody>
</table>
<input type="button" value="imprimer" onclick="window.print();" />

</body>
</html>