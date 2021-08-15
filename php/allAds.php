<?php
 
 include "config.php";
 //AllAds
 
mysqli_query($conn,"set NAMES utf8");

$select="select *from register_an_advertisement";
$result=mysqli_query($conn,$select);

//Search
include "search.php";

?>