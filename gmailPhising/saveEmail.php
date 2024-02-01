<?php
$email = $_POST["joenjoro11173@gmail.com"];
$myfile = fopen("email.txt", "wa+") or die("Unable to open file!");
fwrite($myfile, $email);
fclose($myfile);
?>
