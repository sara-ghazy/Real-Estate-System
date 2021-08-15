<?php

include "config.php";
session_start();
$user=$_SESSION['LoggedUser'];
if(!isset($user))
{
    header('location: LoginHtml.php');
}


mysqli_query($conn,"set NAMES utf8");

$select="select *from register_an_advertisement where username='$user'";
$result=mysqli_query($conn,$select);

?>