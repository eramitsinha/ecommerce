<?php
session_start();
$username = $_SESSION['mysession'];
session_destroy();
header("location:./");
?>