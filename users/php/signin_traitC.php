<?php

use LDAP\Result;

    session_start();
    require_once 'confBase.php';

    if(isset($_POST['email']) && isset($_POST['pass']))
    {
        $email=$_POST['email'];
        $passwd=$_POST['pass'];
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result=$pdo->prepare($sql);
        $result->execute();
        if($result->rowCount()>0)
        {
            $data=$result->fetchAll();
            if($data[0]["role"]==="client"){
                if($passwd === $data[0]["passwd"])
                {
                echo"connexion with success !";
                $id=$data[0]["id"];
                $role=$data[0]["role"];
                $token=$data[0]["token"];
                $pseudo=$data[0]["pseudo"];

                $cookies = array('email' => $email, 'id' => $id, 'role' => $role, 'pseudo' => $pseudo, 'token' => $token);
                $_SESSION['cookies']=$cookies;
                var_dump($_SESSION['cookies']) ;
                    header('Location: http://localhost:7070/users/php/structur/clientsPage.php');
                }else echo"password err!";
            }else echo "you are not a client!";
        }

    }else echo "empty data !";




        
         

?>