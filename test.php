
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "You live in ";
echo $details->city;
echo "!";
?>
