<?php
    include 'connect.php';

    if(isset($_GET['deleteid_contrat']))
    {
        $id_contrat=$_GET['deleteid_contrat'];
        

        $sql = "delete from `contrat` where id_contrat= $id_contrat";
        $result = mysqli_query ($con, $sql);
        if ($result)
        {
            //echo "Deleted successfully";
            header('location: display.php');
            
        }else
        {
            die(mysqli_error($con));
        }

    }
?>