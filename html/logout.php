<?php
//to clear session on logout
session_start();
session_destroy();
header('location:Login.php');

?>