<?php
session_start();
session_destroy();
setcookie("session_id", "", time() - 3600, "/", "", true, true);
header("Location: index.php");
exit();
?>