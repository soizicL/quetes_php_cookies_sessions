<?php
session_start();
$_SESSION['loginname'] = NULL;
unset($_COOKIE['id']);
session_destroy();
header ('Location: index.php');
?>