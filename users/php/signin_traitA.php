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
            if($data[0]["role"]==="Admin"){
                if($passwd === $data[0]["passwd"])
                {
                echo"connexion with success !";
                $id=$data[0]["id"];
                $role=$data[0]["role"];
                $pseudo=$data[0]["pseudo"];   
                 
                $cookies = array('email' => $email, 'id' => $id, 'role' => $role, 'pseudo' => $pseudo, 'token' => $token);
                $_SESSION['cookies']=$cookies;
                var_dump($_SESSION['cookies']) ;
                    header('Location: http://localhost:7070/users/php/structur/AdminPage.php');
                }else echo"password err!";
            }else echo "your are not an Admin";
        }

    }else echo "empty data !";




        
         

?>