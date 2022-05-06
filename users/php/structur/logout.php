<?php 
    session_start();
    unset($_SESSION['cookies']);
    if(!empty($_SESSION)){
        $mazeba=$_SESSION["cookies"]["pseudo"][0];
        $nickname = strtoupper($mazeba);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Sing Up</title>
    <script src="https://kit.fontawesome.com/0702607ee5.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="http://localhost:7070/users/php/structur/homePage.php"><img class="logo" src="../../image/logo.png" alt="logo"></a>
         <nav>
             <ul class="nav_list">
                <li><a class="active" href="http://localhost:7070/users/php/structur/homePage.php">Home</a></li>
                <li><a class="" href="#">Services</a></li>
                <li><a class="" href="#">About</a></li>
                <li><a class="" href="#">Community</a></li>
                <a class="cta" href="http://localhost:7070/users/php/structur/signin_signupC.php"><button><?php if(!empty($nickname)){echo $nickname;}else echo "<i class='fa-solid fa-right-to-bracket'></i>"; ?></button></a>
             </ul>
         </nav>
    </header>
    <section id="information">
        <div class="info">
            <h2>See you Soon !</h2>
            <?php     var_dump($_SESSION) ; ?>
        </div>
    </section>
</body>
</html>