<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forgot.css">
    <title>Document</title>
</head>
<body>
<div class="container">
            <form action="http://localhost:7070/users/php/passwd_change_post.php" method="POST" class="form-container">
                <h2 class="text">Rest your Password !</h2>
                    <input type="hidden" name="token" value="<?php echo base64_decode(htmlspecialchars($_GET['u']));?>">
                    <input type="password" name="passwd" class="passwd" placeholder="password">
                    <input type="password" name="passwd-conf" class="passwd" placeholder="Password">
                    <button type="submit" class=btn>Submit</button>
            </form>
</div>
<script src="../../JS/controle.js"></script>
</body>
</html>