<?php 

echo "sa";

session_start();
session_destroy();
header('location:login.php')
?>