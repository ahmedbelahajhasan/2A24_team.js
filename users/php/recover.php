<?php
    require_once 'confBasePR.php';
    require_once 'confBase.php';

    if(isset($_GET['u']) && isset($_GET['token']) && !empty($_GET['u']) && !empty($_GET['token'])){
        $u=htmlspecialchars(base64_decode($_GET['u']));
        $token=htmlspecialchars(base64_decode($_GET['token']));

        $check = $pdo->prepare('SELECT * FROM recpasswd WHERE token_user = ? AND token = ?');
        $check->execute(array($u, $token));
        $row=$check->rowCount();

        if($row){
            $get=$pdo->prepare('SELECT token FROM users WHERE token = ?');
            $get->execute(array($u));
            $data_u=$get->fetch();
            if(hash_equals($data_u['token'], $u)){
                var_dump($u);
                header("Location: http://localhost:7070/users/php/structur/password_change.php?u=".base64_encode($u));
            }else{
                echo "account error !";
            }
        }else{
            echo "account unvalid";
        }
    }else echo"unvalid link !";

?>