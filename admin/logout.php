<?php
session_start();
unset($_SESSION['nik']);
unset($_SESSION['pwd']);
session_destroy();
header("Location:../login.php");
?>