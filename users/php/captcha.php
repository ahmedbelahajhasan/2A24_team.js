<?php
session_start();

create_image();

function create_image()
{
    #creating random code 
    $md5_hash = md5(rand(0,999));
    $captcha = substr($md5_hash, 15,5);

    $_SESSION['captcha'] = $captcha; 

    $width = 200;
    $height = 50;

    $image = imagecreate($width, $height);

    #color 
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $green = imagecolorallocate($image, 0, 255, 0);
    $orange = imagecolorallocate($image, 204, 204, 204);

    #background
    imagefill($image, 0, 0, $black);

    $font =  "arial.ttf";
    imagettftext($image, 25, 10, 45, 45, $white, $font, $captcha);

    header("Content-Type: image/jpeg");
    imagejpeg($image);
    imagedestroy($image);
    
}

?>