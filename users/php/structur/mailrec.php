<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../../css/forgot.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <form action="http://localhost:7070/users/php/forgot.php" method="POST" class="form-container">
                <h2 class="text">forget password ! insert your email</h2>
                    <input type="email" name="email" class="email" placeholder="Email">
                    <button type="submit" class=btn>Submit</button>
            </form>
    </div>
    <script src="../../JS/controle.js"></script>
</body>
</html>