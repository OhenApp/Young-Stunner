<?php
$botToken = "261124504:AAGrB9eq84cA57Mr9hytoDzr1NcY2qcoIDk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/get updates");
print_r($update);

?>

