
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo $_SERVER['REMOTE_ADDR'];
echo "You live in ";
echo $details->city;
echo "!";
?>
