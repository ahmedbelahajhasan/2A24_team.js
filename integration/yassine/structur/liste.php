<?php

require '../confBase.php';
session_start();
if(!empty($_SESSION)){
    $mazeba=$_SESSION["cookies"]["pseudo"][0];
    $nickname = strtoupper($mazeba);
    }
$id;
    $Query = $pdo->prepare("SELECT * FROM users");
    $exec = $Query->execute();

    $users = $Query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/dash.css">
    <script src="https://kit.fontawesome.com/0702607ee5.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
   
<body>
    <header>
        <a href="http://localhost:7070/users/php/structur/AdminPage.php"></a>
         <nav>
             <ul class="nav_list">
                <li><a class="active" href="http://localhost:7070/users/php/structur/AdminPage.php">Home</a></li>
                <li><a class="" href="">Services</a></li>
                <li><a class="" href="#">About</a></li>
                <li><a class="" href="#">Community</a></li>
                <a class="cta" href="http://localhost:7070/users/php/structur/signin_signupC.php"><button><?php if(!empty($nickname)){echo $nickname;}else echo "<i class='fa-solid fa-right-to-bracket'></i>"; ?></button></a>
             </ul>
         </nav>
    </header>

    <section id="menu">
        <div class="logo">
            <!-- <img src="../../image/logo1.png" alt="logo"> -->
            <h2>Good Deals</h2>
        </div>

        <div class="items">
            <li><i class="fa-solid fa-house-user"></i><a href="http://localhost:7070/users/php/structur/homePage.php">Home</a>
            <li><i class="fa-solid fa-table-columns"></i><a href="http://localhost:7070/users/php/structur/AdminPage.php">Dashboard</a></li>
            <li class="active"><i class="fa-solid fa-users-viewfinder"></i><a href="http://localhost:7070/users/php/structur/liste.php">Users</a></li>
            <li><i class="fa-solid fa-sack-dollar"></i><a href="#">trads</a></li>
            <li><i class="fa-solid fa-satellite-dish"></i><a href="#">Communication</a></li>
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="part1">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search ! ">
                </div>
            </div>
            <div class="acount">
                <i class="fa-solid fa-bell"></i>
                <a href="http://localhost:7070/users/php/structur/AdminPage.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>

        <div class="board">
        <h3 class="i-name">
           Dashboard
       </h3>
                <table width="100%">
                    <thead>
                            <th scope="col" style="color: black;">ID</th>
                            <th scope="col" style="color: black;">Role</th>
                            <th scope="col" style="color: black;">Email</th>
                            <th scope="col" style="color: black;">Pseudo</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="table-cell users-id">
                                   <h5 style="color: black;"><?= $user['id'] ?></h5> 
                                </td>
                                <td class="table-cell users-role">
                                <h5 style="color: black;"><?= $user['role'] ?></h5>  
                                </td>
                                <td class="table-cell users-email">
                                <h5 style="color: black;"><?= $user['email'] ?></h5> 
                                </td>
                                <td class="table-cell users-pseudo">
                                <h5 style="color: black;"><?= $user['pseudo'] ?></h5> 
                                </td>
                                <td class="edit-user"> 
                                    <a href="http://localhost:7070/users/php/update.php?updateID=<?= $user['id']?>"><i class="fa-solid fa-user-pen"></i></a>
                                    <a href="http://localhost:7070/users/php/delete.php?deleteID=<?= $user['id']?>"><i class="fa-solid fa-user-slash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
    </section>
</body>
