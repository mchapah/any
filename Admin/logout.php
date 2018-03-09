<?php
session_start();
unset($_SESSION['username']);
session_destroy();
$error="You are logged out";
header("location: login.php?error='".$error."'");
exit;
?>