<?php

$dst_x = 0;
$dst_y = 0;
$src_x = $_POST['left']; //Crop Start X
$src_y = $_POST['top'];  //Crop Start y
$dst_w = $_POST['width']; //Thumb Width
$dst_h = $_POST['height']; //Thumb Height
$src_w = $_POST['width'];  //$src_x + $dst_w
$src_h = $_POST['height']; //$src_y + $dst_h

$dst_image = imagecreatetruecolor($dst_w, $dst_h);
$src_image = imagecreatefromjpeg("img/1.jpg");
imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
imagejpeg($dst_image, "new.jpg");
?>