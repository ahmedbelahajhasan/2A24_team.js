<?php

    
    $serverName = 'localhost';
    $userNameDB = 'root';
    $PasswordDB ='';
    $dbName ='recpasswd';

    try{
        $pdo = new PDO(
            "mysql:host=localhost;dbname=mybase;charset=utf8",
            $userNameDB,
            $PasswordDB,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
            
            );
            #echo"Connected Successfully";
    }
    catch(PDOException $exception){
        echo "Connection Failed : ". $exption->getMessage();
    }
    
    //creating query :

    try{
        $Query = $pdo->query('SELECT * FROM recpasswd');
        $list= $Query->fetchAll();
    }
    catch(PDOException $exception){
        $exception->getMessage();
    }
?>
