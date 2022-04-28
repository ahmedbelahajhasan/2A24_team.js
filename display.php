<?php
include 'connect.php';
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="../template/style.css">
    <title>Crud</title>
  </head>
  <body>
  <div class="form-group">
            <input class="form-control" type="text" id="search" value="" placeholder="Rechercher des reclamations"/>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://unpkg.com/popper.js@1.16.1-lts/dist/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
          $('#search').keyup(function(){
              var question = $(this).val();
              console.log(question);
          });
      });
      </script>
      <div class="container">
          <button class="btn btn-warning my-5"><a href="user.php"
              class="text-light">Ajouter une reclamation</a>
</button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">email</th>
      <th scope="col">numtel</th>
      <th scope="col">reclamation</th>  
      <th scope="col">operations</th>
  

    </tr>
  </thead>
  <tbody>
      <?php
$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $nom=$row['nom'];
        $email=$row['email'];
        $numtel=$row['numtel'];
        $reclamation=$row['reclamation'];
       
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$nom.'</td>
        <td>'.$email.'</td>
        <td>'.$numtel.'</td>
        <td>'.$reclamation.'</td>
        
        <td>
        <button class="btn btn-warning"><a href="modifier.php?modifierid='.$id.'" class="text-light">modifier</a></button>
        <button class="btn btn-danger"><a href="supprimer.php?supprimerid='.$id.'" class="text-light">supprimer</a></button>
    </td>
      </tr>';
    }
}

      ?>

  </tbody>
</table>
</body>
</html>