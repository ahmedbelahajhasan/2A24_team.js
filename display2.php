<?php
include 'connect2.php';
?>

<?php 
$html = "contenu à imprimer";
?>

<div id="imprimer" style="display:none;">
	<?php echo $html; ?>
</div>

<div>
	<input type="button" value="imprimer" onclick="imprimer();" />
</div>

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
    <title>commande</title>
  </head>

  <body>
      <div class="container">
          <button class="btn btn-warning my-5"><a href="user2.php"
              class="text-light">Ajouter une date</a>
</button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">mail</th>
      <th scope="col">num_c</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
      <?php
$sql="Select * from `commande`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $nom=$row['nom'];
        $mail=$row['mail'];
        $num_c=$row['num_c'];
        $date=$row['date'];
        echo ' <tr>
        <th scope="row">'.$nom.'</th>
        <td>'.$nom.'</td>
        <td>'.$mail.'</td>
        <td>'.$num_c.'</td>
        <td>'.$date.'</td>
        <td>
        <button class="btn btn-warning"><a href="modifier.php?modifiernom='.$nom.'" class="text-light">modifier</a></button>
        <button class="btn btn-danger"><a href="supprimer.php?supprimernom='.$nom.'" class="text-light">supprimer</a></button>
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