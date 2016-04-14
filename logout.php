<?php
$cookie_name = "iplt20";
setcookie($cookie_name,'', time() - (86400 * 30), "/");
header('Location:'.'index.php');
?>
