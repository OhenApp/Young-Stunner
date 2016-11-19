<?php


$botToken = "261124504:AAGrB9eq84cA57Mr9hytoDzr1NcY2qcoIDk";
$website = "https://api.telegram.org/bot".$botToken;

?>

<form
action="<?php echo $website.'/ sendHi' ?> method= "post" enctype = "multipart/form-data">
<input type= "text" name"chat_id" value="280657512" />

</form>