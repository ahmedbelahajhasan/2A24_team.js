<?php
     require 'confBase.php';
    if(isset($_POST['email']) && isset($_POST['user-name']) && isset($_POST['pass']) && isset($_POST['cpass']))
    {
        session_start();
        $id=rand(0,9999);
         $email = htmlspecialchars($_POST['email']);
         $pseudo = htmlspecialchars($_POST['user-name']);
         $passwd = htmlspecialchars($_POST['pass']);
         $cpasswd = htmlspecialchars($_POST['cpass']);
         $role = "Admin";
         $token = bin2hex(openssl_random_pseudo_bytes(24));

         $check = $pdo->prepare('SELECT email, passwd, pseudo, token FROM users WHERE email = ?');
         $check->execute(array($email));
         $data=$check->fetch();
         $row=$check->rowCount();
         $cookies = array('email' => $email, 'id' => $id, 'role' => $role, 'pseudo' => $pseudo, 'token' => $token);
         if($row == 0)
        {
            
                if($passwd == $cpasswd)
                {
                    $insert = $pdo->prepare('INSERT INTO users(id,role,email, passwd, pseudo, token) VALUES(:id, :role, :email, :passwd, :pseudo, :token)');
                    $insert->execute(array(
                        'id'=>$id,
                        'role'=>$role,
                        'email'=>$email,
                        'passwd'=>$passwd,
                        'pseudo'=>$pseudo,
                        'token'=>$token
                    ));
                    $_SESSION['cookies']=$cookies;
                    var_dump($_SESSION['cookies']) ;
                    header('Location: http://localhost:7070/users/php/structur/AdminPage.php');
                }else header('Location : http://localhost:7070/users/php/structur/signUpAdmin.php?reg_err=Password');
        }else header('Location : http://localhost:7070/users/php/structur/signUpAdmin.php?reg_err=already');
    }
    ?>