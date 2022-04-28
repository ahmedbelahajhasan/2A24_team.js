<?php
include ("connect.php");
$sql=("SELECT questions.question,reponses.reponse FROM questions INNER JOIN reponses WHERE questions.id=reponses.id ");
$result=mysqli_query($con,$sql);
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
        .questions{
            font-weight:bold;
            font-size:16px;
        }
        .answer{
            margin-left:20px;
        }
        </style>  
        

  </head>
  <body>
  <div class="form-group">
            <input class="form-control" type="text" id="search" value="" placeholder="Rechercher un ou plusieurs Q&A"/>
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
      </body>
  <body>
    <div align="center">
        <h1>Q&A</h1>
        <p><a href="../template/index.php">Home</a>
        <p><a href="index.php">Q&A</a>
        <a href="ajouterq.php">Ajouter une question</a>
        <a href="modifierq.php">Modifier une question</a></p>
        <a href="ajouterr.php">Ajouter une reponse</a>
        <a href="modifierr.php">Modifier une reponse</a></p>
        <div class="faq_holder">
  
 
           <table align="center" border="2" cellpadding="20">
                <tr>
                    <th>questions</th>
                    <th>reponses</th>
    </tr>
    <?php 
     while($row=mysqli_fetch_assoc($result)){
         ?>
    <tr>
        <td><?php echo $row['question']; ?></td>
        <td><?php echo $row['reponse']; ?></td>
    </tr>
    <?php
    }
    ?>  </body>
</html>
