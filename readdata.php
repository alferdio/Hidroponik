<?php
$jsondata = file_get_contents('https://api.thingspeak.com/channels/1037617/feeds/last.json');
echo $jsondata;
?>