<?php
session_start();
$_SESSION['login'] = 1;
session_destroy();
header("Location:index.php");
?>
