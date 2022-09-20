<?php
// fetch id and type
$id = $_GET['id'];
$type = $_GET['type'];

include "config.php";


if($type=="category")
{
    mysqli_query($connection,"DELETE from categories where id='$id'");
    header("location:category-list.php");
}

?>