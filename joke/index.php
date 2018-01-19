<?php
if(isset($_GET['cache']) == "") 
{ 
//header('Location: https://backend.scratchyone.com/joke/?cache='.rand());
}
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Set the content-type
header('Content-type: image/png');
 $f_contents = file("jokes.txt"); 
 $line = $f_contents[rand(0, count($f_contents) - 1)]; 
// Create the image
$font=23;
$im = imagecreatetruecolor(1500, 100);
imagealphablending($im, false);
imagesavealpha($im, true);
$col=imagecolorallocatealpha($im,255,255,255,127);
imagefill($im, 0, 0, $col);
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

// The text to draw
$text = $line;
// Replace path by your own font path
$font = 'arial.ttf';

// Add some shadow to the text


// Add the text
imagettftext($im, 23, 0, 10, 40, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>
