<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0702607ee5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/signin_signup.css">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LebxMgfAAAAAOjAxmPPFV5jCdM1c3X95c_vyDWT"></script>
</head>
<body>
    <div class="container" id="inscrit">
        <div class="signin-signup">
            <form action="http://localhost:7070/users/php/signin_traitC.php" method="post" class="sign-in-form">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="email" placeholder="Email" class="email"/>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-fingerprint"></i>
                    <input type="password" name="pass" placeholder="Password" class="passwd"/>
                </div>
                <input type="submit" value="Login" class="btn">
                <p class="social-texte">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div class="forget-mdp">
                    <a href="http://localhost:7070/users/php/structur/mailrec.php" class="social-link">forget password ?</a>
                </div>
                <p style="color: red;" id="erreur"></p>
            </form>
            <form action="http://localhost:7070/users/php/signup_traitC.php" method="post" class="sign-up-form">
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class="fa-solid fa-at"></i>
                    <input type="text" name="email" placeholder="Email" id="email"/>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-fingerprint"></i>
                    <input type="password" name="pass" placeholder="Password" id="passwd"/>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-fingerprint"></i>
                    <input type="password" name="cpass" placeholder="Confirm Password" id="passwdR"/>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user-name" placeholder="User Name" id="user-name"/>
                </div>

                <input type="submit" value="Sign Up" class="btn">
                <p class="social-texte">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-google"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p style="color: red;" id="erreur"></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Brand !</h3>
                    <p>Sign in now to see new product and benefit from our offers!</p>
                    <button class="btn" id="sign-in-btn">Sign In</button>
                </div>
                <img src="../../image/rocket_signup.jpg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Brand !</h3>
                    <p>Sign Up! What are waiting for!</p>
                    <button class="btn" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="../../image/rocket_signup.jpg" alt="" class="image">
            </div>
        </div>
    </div>
    <script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LebxMgfAAAAAOjAxmPPFV5jCdM1c3X95c_vyDWT', {action: 'login'}).then(function(token) {
       
    });
});
    //  <script src="../../JS/app.js"></script>
    <script src="../../JS/app.js"></script>
    <script src="../../JS/controle.js"></script>
    
</body>
</html>