<?php 
$input_image="sampleimg.jpg";
$output_image="output1.png";

$img=imagecreatefromjpeg($input_image);
imagejpeg($img,$output_image,10);
?>
