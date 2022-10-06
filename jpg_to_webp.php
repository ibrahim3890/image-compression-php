<?Php
// Raster Image
$ImgLocationBefore = "img-3.png";

$ImgLocationAfter ="img-3.jpg";


$img = imagecreatefromjpeg($ImgLocationBefore);
// assansial propatirt
// imagepalettetotruecolor($img);
imagealphablending($img, true); 
imagesavealpha($img, true);
// 50-80
imagewebp($img, $ImgLocationAfter, 70); 
// Comprassion Rasio:60

imagedestroy($img);




?>