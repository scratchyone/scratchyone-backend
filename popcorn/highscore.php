<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
$username = mysql_real_escape_string($_GET['name'], $db);
$score = mysql_real_escape_string($_GET['score'], $db);
$stmt = $pdo->prepare('INSERT INTO Scores
SET name = :name
   , score = :score
   , ts = CURRENT_TIMESTAMP
   ON DUPLICATE KEY UPDATE
   ts = if(:score>score,CURRENT_TIMESTAMP,ts), score = if (:score>score, :score, score);');

$stmt->execute(array('name' => $name,'score' => $score));
?>