<?php
session_start();

$n=8;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}

$text = getName($n);
$_SESSION["vercode1"] = $text;


$height = 25; //CAPTCHA image height
$width = 100; //CAPTCHA image width

$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 5; 
imagestring($image_p, $font_size, 5, 3, $text, $white);
imagejpeg($image_p, null, 80);
?>