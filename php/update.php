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

$image=$_FILES['image']['tmp_name'];


$id=$_GET['title'];

$updatee=0;

if($image!="")
{
$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$update="update  register_an_advertisement set img='$image' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}


if(!empty($advType))
{
$update="update  register_an_advertisement set typee='$advType' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($city))
{
$update="update  register_an_advertisement set city='$city' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}
if(!empty($estateType))
{
$update="update  register_an_advertisement set real_state_type='$estateType' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($region))
{
$update="update  register_an_advertisement set region='$region' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}


if(!empty($address))
{
$update="update  register_an_advertisement set address='$address' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($detail))
{
$update="update  register_an_advertisement set detail='$detail' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}



if(!empty($space))
{
$update="update  register_an_advertisement set spacee='$space' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($rooms))
{
$update="update  register_an_advertisement set  numberofrooms=$rooms where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($floors))
{
$update="update  register_an_advertisement set numberoffloors=$floors where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($price))
{
    $price=floatval($price);
$update="update  register_an_advertisement set price=$price where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($owner))
{
$update="update  register_an_advertisement set ownername='$owner' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($email))
{
$update="update  register_an_advertisement set email='$email' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if(!empty($phone))
{
$update="update  register_an_advertisement set phonenumber='$phone' where id=$id";
mysqli_query($conn,$update);
$updatee=1;
}

if($updatee==1)
{
    $updatee=0;
    echo '<script>alert("تم التحديث")</script>'; 
    
}else
{
    echo '<script>alert("اضف تعديل لاعلانك")</script>'; 
}

}
?>



