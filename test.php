
<?php
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'][0];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo explode(",",$_SERVER['HTTP_X_FORWARDED_FOR'])[0];
echo "You live in ";
echo $details->city;
echo "!";
?>
