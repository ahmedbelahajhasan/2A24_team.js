<?php
    session_start();
    require 'confBase.php';
    if(isset($_GET['updateID']) && !empty($_GET['updateID']))
    {
        $getid = $_GET['updateID'];
        $selectID=$pdo->prepare('SELECT * FROM users WHERE id =  ?');
        $selectID->execute(array($getid));
        if($selectID->rowCount()>0){
            $userInfo=$selectID->fetch();
            $email=$userInfo['email'];
            $pseudo=$userInfo['pseudo'];
            $role=$userInfo['role'];
            $passwd=$userInfo['passwd'];
            $id=$userInfo['id'];
            if(isset($_POST['submit'])){
              $email_up=htmlspecialchars($_POST['email']);
              $pseudo_up=htmlspecialchars($_POST['pseudo']);
              $role_up=htmlspecialchars($_POST['role']);
              $passwd_up=htmlspecialchars($_POST['passwd']);
              $id_up=htmlspecialchars($_POST['id']);
              $UPuser=$pdo->prepare('UPDATE users SET email = ?, pseudo = ?, role = ?, passwd = ?, id = ? WHERE id = ?');
              $UPuser->execute(array($email_up, $pseudo_up, $role_up, $passwd_up, $id_up, $getid));
              header('location: http://localhost:7070/users/php/structur/liste.php');
            }
        }else{
            echo "no memeber selected !";
        }
    }
    else
    {
        echo "no id selected";
    }
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/update.css">
    <title>Update Page</title>
</head>

<body>
    <form action="" id="msform"  method="post">
      <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Update</h2>
          <input type="text" name="id" value="<?= $id; ?>"/>
          <input type="text" name="email" value="<?= $email; ?>"/>
          <input type="text" name="pseudo" value="<?= $pseudo; ?>"/>
          <input type="text" name="role" value="<?= $role; ?>"/>
          <input type="text" name="passwd" value="<?= $passwd; ?>"/>
          <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
