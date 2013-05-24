<?php
session_start();
session_destroy();
session_unset($_SESSION['username'], $_SESSION['password']);
echo "<script language='javascript'>document.location.href='../admin/';</script>";
?>
