<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="CSSFiles/button.css">
  <title>GOOD DEAL</title>
</head>

<body>

  <div class="overlay">
    <h1>GOOD DEAL</h1>
    <span  >welcome</span>
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

      <div class="menu-links menu ul li:hover">
        <ul>
          <li ><a href="http://localhost/crud/index.php" class ="no-underline textBlack">home</a></li>
          <li><a href="./jon/index.html"  class ="no-underline textBlack">Gestion des offres</a></li>
          <li > <a href="" class ="no-underline textBlack">Gestion des voitures</a></li>
        </ul>
      </div>

      <div class="scrolldown">scroll</div>
    </div>

    <div class="text">
      <div class="title">GOOD DEAL</div>
      <p>Mauris elementum, dui ac sagittis <br> cursus, libero elit sodales odio</p>
    </div>

    <div class="watchnow ">
      <i class="fa fa-play"></i>
      <a href="http://localhost/crud/index.php" class =" no-underline textBlack" >welcome</a>
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
</body>

</html>