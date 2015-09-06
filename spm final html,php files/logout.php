<?php
session_start();
session_destroy();
unset($_SESSION['name']);
unset($_SESSION['id']);
header("location:index.php");
?>



