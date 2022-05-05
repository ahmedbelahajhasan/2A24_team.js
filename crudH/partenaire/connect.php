<?php

$con = new mysqli ('localhost', 'root', '', 'partenaire' );

if(!$con)
{

    die(mysqli_error($con));
}



?>