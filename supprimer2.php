<?php
include 'connect2.php';
if (isset($_GET['supprimernom']))
{
    $nom=$_GET['supprimernom'];
    $sql="delete from `commande` where nom=$nom";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Suppression faite";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>