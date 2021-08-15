<?php
include "config.php";

    $user=$_SESSION['LoggedUser'];

if(isset($_POST['regesterAsSold']))

{
    

     mysqli_query($conn,"set NAMES utf8");
    $buyerId=$_POST['buyerId'];
    $sold=$_POST['sold'];

    $id=$_GET['title'];
    if(!empty($buyerId) &&!empty($sold))
    {
        $select="select *from register where username='$buyerId'";
        $check=mysqli_query($conn,$select);
        while(mysqli_fetch_array($check))
        {
 
            $type="select typee from register_an_advertisement where id=$id ";

            $type=mysqli_query($conn,$type);
            $type = mysqli_fetch_array($type);
            $insert="insert into customer (ownerr,username,typee) values('$user','$buyerId','$type[0]')";
            mysqli_query($conn,$insert);
            $delete="delete from reviews where id=$id";
            mysqli_query($conn,$delete);
            $delete="delete from register_an_advertisement where id=$id";
            mysqli_query($conn,$delete);
            header('location: myAdvsHtml.php');
            exit();
         
           
        }
        
            echo '<script>alert("اسم المستخدم غير مسجل")</script>'; 
        
    }else if(empty($buyerId)){
        echo '<script>alert("ادخل اسم المستخدم للمشترى او المستأجر")</script>';

    }else
    {
        echo '<script>alert("يجب تعيين كمباع او مشترى")</script>';
    }

}

?>