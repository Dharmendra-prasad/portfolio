<?php
session_start();


//echo $_SESSION['admin_name'];
session_destroy();
header('location:admin.php');
?>