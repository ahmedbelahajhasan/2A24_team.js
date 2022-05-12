<?php 
    session_start();
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
    <!-- <link rel="stylesheet" href="../../css/style.css"> -->
    <title>Sing Up</title>
    <script src="https://kit.fontawesome.com/0702607ee5.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- <header>
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
    </header> -->
    <div class="overlay">
    <h1>GOOD DEAL</h1>
    <span>welcome</span>
  </div>
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <h1>
          <span>GOOD <br> DEAL</span>
          <br>
          welcome
        </h1>
      </div>
      <div class="menu-links">
        <ul>
          <li>home.</li>
          <li>snow life.</li>
          <li>contact.</li>
          <a class="cta" href="http://localhost:7070/users/php/structur/signin_signupC.php"><button><?php if(!empty($nickname)){echo $nickname;}else echo "<i class='fa-solid fa-right-to-bracket'></i>"; ?></button></a>
        </ul>
      </div>
      <div class="scrolldown">scroll</div>
    </div>
    <div class="text">
      <div class="title">GOOD DEAL</div>
      <p>Mauris elementum, dui ac sagittis <br> cursus, libero elit sodales odio</p>
    </div>
    <div class="watchnow">
      <i class="fa fa-play"></i>
      <a href="/php/structur/homePage.php">welcome</a>
    </div>
    <div class="media">
      <ul>
        <li><i class="fa fa-facebook"></i></li>
        <li><i class="fa fa-twitter"></i></li>
        <li><i class="fa fa-instagram"></i></li>
      </ul>
    </div>
    <div class="ellipse-container">
      <div class="ellipse thin"></div>
      <div class="ellipse thick"></div>
      <div class="ellipse yellow"></div>
     
    </div>
  </div>
  <script>
    TweenMax.to(".overlay h1", 2, {
      opacity: 0,
      y: -60,
      ease: Expo.easeInOut
    })
    TweenMax.to(".overlay span", 2, {
      delay: .3,
      opacity: 0,
      y: -60,
      ease: Expo.easeInOut
    })
    TweenMax.to(".overlay", 2, {
      delay: 1,
      top: "-100%",
      ease: Expo.easeInOut
    })
    TweenMax.from(".ellipse-container", 1, {
      delay: 2,
      opacity: 0,
      ease: Expo.easeInOut
    })
    TweenMax.from(".yellow", 1, {
      delay: 3.5,
      opacity: 0,
      ease: Expo.easeInOut
    })
    TweenMax.from(".circle1", 1, {
      delay: 2.4,
      opacity: 0,
      ease: Expo.easeInOut
    })
    TweenMax.from(".circle2", 1, {
      delay: 2.6,
      opacity: 0,
      ease: Expo.easeInOut
    })
    TweenMax.from(".logo", 1, {
      delay: 3,
      opacity: 0,
      y: -100,
      ease: Expo.easeInOut
    })
    TweenMax.staggerFrom(".menu-links ul li", 1, {
      delay: 3.2,
      opacity: 0,
      x: -100,
      ease: Expo.easeInOut
    }, 0.08)
    TweenMax.from(".scrolldown", 1, {
      delay: 3.4,
      opacity: 0,
      y: 100,
      ease: Expo.easeInOut
    })
    TweenMax.from(".text .title", 1, {
      delay: 3,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })
    TweenMax.from(".text p", 1, {
      delay: 3.2,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })
    TweenMax.from(".watchnow", 1, {
      delay: 3.4,
      opacity: 0,
      x: 200,
      ease: Expo.easeInOut
    })
    TweenMax.staggerFrom(".media ul li", 1, {
      delay: 3,
      opacity: 0,
      y: 100,
      ease: Expo.easeInOut
    }, 0.08)
  </script>
    <section id="information">
        <div class="info">
            <a href="http://localhost:7070/users/php/structur/AdminPage.php" style="color: black;">if u are an admin u can connect from this link ! </a>
        </div>
    </section>
</body>
</html>
