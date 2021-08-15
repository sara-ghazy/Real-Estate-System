<?php

include "config.php";
mysqli_query($conn,"set NAMES utf8");

$id=$_GET['title'];
$select="select *from register_an_advertisement where id=$id";
$result=mysqli_query($conn,$select);

$select="select *from reviews where id=$id";
$resultt=mysqli_query($conn,$select);
?>


<?php //reviews ?>
<?php

include "config.php";
if(isset($_POST['add']))
{
    session_start();
    $user=$_SESSION['LoggedUser'];

mysqli_query($conn,"set NAMES utf8");
$val=$_POST['val'];
$suggestPrice=$_POST['suggestPrice'];
$commentt=$_POST['commentt'];
$insert="insert into reviews(id,username,commentt,suggestion,valuation)values
($id,'$user','$commentt','$suggestPrice','$val')";
mysqli_query($conn,$insert);
echo '<script>alert("تم الاضافه")</script>'; 

}


?>