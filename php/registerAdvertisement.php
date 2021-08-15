<?php
include "config.php";
session_start();
$user=$_SESSION['LoggedUser'];
if(!isset($user))
{
    header('location: LoginHtml.php');
}
if(isset($_POST['register']))
{

mysqli_query($conn,"set NAMES utf8");
/* Advertisement */
$advType=$_POST['advType'];
$city=$_POST['city'];
$region=$_POST['region'];
$estateType=$_POST['estateType'];
$address=$_POST['address'];
$detail=$_POST['detail'];
$space=$_POST['space'];
$rooms=$_POST['rooms'];
$floors=$_POST['floors'];
$price=$_POST['price'];
/*Owner */
$owner=$_POST['owner'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));;
if(empty($rooms))
{
    $rooms=0;
}
if(empty($floors))
{
    $floors=0;
}
$insert="insert into register_an_advertisement(username,typee,city,region,real_state_type,address,detail,spacee,numberoffloors,numberofrooms,price,img
,ownername,email,phonenumber) 
values('$user','$advType','$city','$region','$estateType','$address','$detail','$space','$floors','$rooms',$price,'$image',
'$owner','$email','$phone')";
mysqli_query($conn,$insert);

echo '<script>alert("تم تسجيل اعلانك")</script>'; 

}


?>