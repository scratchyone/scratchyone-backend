
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo rand(1,5);
echo "You live in ";
echo $details->city;
echo "!";
?>
