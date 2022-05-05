<?php

$con = new mysqli ('localhost', 'root', '', 'offre' );

if(!$con)
{

    die(mysqli_error($con));
}



?>