<?php
include ("connect.php");
$sql=("SELECT questions.question,reponses.reponse FROM questions INNER JOIN reponses WHERE questions.id=reponses.id ");
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>

<html lang="en">
  <!-- *****************************traduction**************************** -->


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="indexC.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <title>Q&A</title>
        <body>
            <!--nav bar-->
            <header>
                <a href="/Shtml/index.html"><img class="logo" src="/image/logo.png" alt="logo"></a>
                <nav>
                    <ul class="nav_list">
                        <li><a class="active" href="http://localhost/Ecommerce-master/template/index.php">Home</a></li>
                        <li><a href="index.php" >Q&A</a></li>
                        <li><a href="ajouterq.php" >Add a question</a></li>
                        <li><a href="modifierq.php" ">Edit a question</a></li>
                        <li><a href="ajouterr.php" >Add an answer</a></li>
                        <li><a href="modifierr.php" >Edit an answer</a></li>
                    </ul>
                </nav>
            </header>
            <!--end nav bar-->
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
  <body style="background:rgb(60, 60, 60)">
    <div align="center">
        <div class="faq_holder">
  
                <style type="text/css">
                table    { margin-top: 150px ;border:none; border-radius: 15px; background-color:#f07b0e; color:#FFF; }
                table td { border:solid 1px; border-radius: 15px; }
                </style>
                <table align="center" cellpadding="20">
                    
                        <tr>
                            <th style="color:black;">questions</th>
                            <th   style="color:black;">answers</th>
                        </tr>
                
                        <?php 
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                            <td style="color:black;"><?php echo $row['question']; ?></td>
                            <td style="color:black;"><?php echo $row['reponse']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>  
                </table>
        </div>
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                </script>
        </div>
    </div>
    
</body>
</html>



        