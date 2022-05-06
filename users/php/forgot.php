<?php    
   require_once 'confBasePR.php';
   require_once 'confBase.php';
   if(isset($_POST['email']) && !empty($_POST['email']))
   {
    var_dump($_POST['email']);

    $email=htmlspecialchars($_POST['email']);
    
    $check=$pdo->prepare('SELECT token FROM users WHERE email = ?');
    $check->execute(array($email));
    $data=$check->fetch();
    $row=$check->rowCount();

    if($row){
        $token = bin2hex(openssl_random_pseudo_bytes(24));
        $token_user = $data['token'];

        $insert = $pdo->prepare('INSERT INTO recpasswd(token_user, token) VALUES(?,?)');
        $insert->execute(array($token_user, $token));
        $link = 'http://localhost:7070/users/php/recover.php?u='.base64_encode($token_user).'&token='.base64_encode($token);
       echo "<a href='$link'>click the link to reset your password !</a>";
    }else{
        echo "email don't existe !";
    }


   }else

?>
