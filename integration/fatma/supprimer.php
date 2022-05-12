<?php
include 'connect.php';
if (isset($_GET['supprimerid_res']))
{
    $id_res=$_GET['supprimerid_res'];
    $sql="delete from `reservation` where id_res=$id_res";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Suppression faite";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>