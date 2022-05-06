<?php   
    require_once 'confBase.php';
    require_once 'confBasePR.php';

    var_dump($_POST['passwd']);
    var_dump($_POST['passwd-conf']);
    var_dump($_POST['token']);
    if(isset($_POST['passwd']) && isset($_POST['passwd-conf']) && isset($_POST['token'])){
        if(!empty($_POST['passwd']) && !empty($_POST['passwd-conf']) && !empty($_POST['token'])){
            $passwd= htmlspecialchars($_POST['passwd']);
            $passwd_rep=htmlspecialchars($_POST['passwd-conf']);
            $token=htmlspecialchars($_POST['token']);

            $check=$pdo->prepare('SELECT *FROM users WHERE token = ?');
            $check->execute(array($token));
            $row=$check->rowCount();
            var_dump($passwd);
            if($row){
                if($passwd === $passwd_rep){
                    $update=$pdo->prepare('UPDATE users SET passwd = ? WHERE token = ?');
                    $update->execute(array($passwd, $token));

                    //$delete = $pdo->prepare('DELETE FROM recpasswd WHERE token_user = ?');
                    //$delete->execute(array($token));
                    header("Location: http://localhost:7070/users/php/structur/homePage.php");
                    echo "password has been changed with succes !";
                }else echo "password not matching";
            }else echo" not exesting account !";
        }else echo "insert a new password !";
    }
?>