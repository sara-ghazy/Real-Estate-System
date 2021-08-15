
<?php

include "config.php";
mysqli_query($conn,"set NAMES utf8");

$id=$_GET['title'];
$select="select *from register_an_advertisement where id=$id";
$result=mysqli_query($conn,$select);

$select="select *from reviews where id=$id";
$resultt=mysqli_query($conn,$select);
?>
