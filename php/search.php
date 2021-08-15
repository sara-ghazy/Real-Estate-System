<?php

include "config.php";
if(isset($_POST['search']))
{

mysqli_query($conn,"set NAMES utf8");

$type=$_POST['type'];
$etype=$_POST['etype'];
$price1=$_POST['price1'];
$price2=$_POST['price2'];

if(empty($price2))
{
    $price2=0;
}
if(empty($price1))
{
$price1=1000000000000000000;
}
$price1 =floatval($price1);
$price2 = floatval($price2);
if(!empty($type)&&!empty($etype))
{
$select="select *from register_an_advertisement where typee='$type' and real_state_type='$etype' and
(price>=$price2 and price<=$price1)";
}else if(empty($type)&&empty($etype))
{
    $select="select *from register_an_advertisement where (price>=$price2 and price<=$price1) ";
}else if(empty($type))
{
    $select="select *from register_an_advertisement where  real_state_type='$etype' and (price>=$price2 and price<=$price1)";
}else
{
    $select="select *from register_an_advertisement where typee='$type'  and 
    (price>=$price2 and price<=$price1) ";
}
$result=mysqli_query($conn,$select);

}



?>