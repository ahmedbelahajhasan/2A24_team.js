<?php
    include 'connect.php';

    if(isset($_GET['deleteid_carte']))
    {
        $id_carte=$_GET['deleteid_carte'];
        

        $sql = "delete from `cartefidele` where id_carte= $id_carte";
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