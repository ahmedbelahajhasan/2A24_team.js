<?php
    session_start();
    require 'confBase.php';
    if(isset($_GET['deleteID']) && !empty($_GET['deleteID']))
    {
        $getid = $_GET['deleteID'];
        $selectID=$pdo->prepare('SELECT * FROM users WHERE id =  ?');
        $selectID->execute(array($getid));
        if($selectID->rowCount()>0){
            $bannuser=$pdo->prepare('DELETE FROM users WHERE id = ?');
            $bannuser->execute(array($getid));
            header('location: http://localhost:7070/users/php/structur/liste.php');
        }else{
            echo "no memeber selected !";
        }
    }
    else
    {
        echo "no id selected";
    }

?>