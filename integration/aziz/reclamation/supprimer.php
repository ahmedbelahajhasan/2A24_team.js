<?php
include 'connect.php';
if (isset($_GET['supprimerid']))
{
    $id=$_GET['supprimerid'];
    $sql="delete from `reclamations` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Suppression faite";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>