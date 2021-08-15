
<?php
include "config.php";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
/*Register */
if(isset($_POST['submit']))
{

mysqli_query($conn,"set NAMES utf8");
$fullname=$_POST['fullName'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$em= test_input($email);
    // check if e-mail address is well-formed
    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
      echo '<script> alert( "Invalid email format")</script>';
    }else{
$select="select * from register where username='$username' ";
$check=mysqli_query($conn,$select);
$r=mysqli_num_rows($check);

$select="select * from register where email='$email' ";
$check=mysqli_query($conn,$select);
$rr=mysqli_num_rows($check);

if($r==0&&$rr==0)
{
$insert="insert into register(fullname,gender,email,username,passwordd)values('$fullname','$gender','$email','$username','$password')";
   mysqli_query($conn,$insert);

    echo '<script>alert("The account has been created")</script>'; 
}else if($rr>0)
{
    echo '<script>alert("Email is not Valid")</script>'; 
   
}else
{
    echo '<script>alert("UserName is not Valid")</script>'; 
}
}
}

?>

<?php

include "config.php";
/*Login */
if(isset($_POST['login']))
{

mysqli_query($conn,"set NAMES utf8");
$username=$_POST['userName'];
$password=$_POST['password'];
$select="select username,passwordd from register where username='$username' and passwordd='$password' ";
$result=mysqli_query($conn,$select);
$login=mysqli_num_rows($result);
if($login>0)
{

    session_start();
    $_SESSION["LoggedUser"]=$username;
header('location: mainHtml.php');
exit();

}else
{
    echo '<script>alert("Invalid UserName Or Password ")</script>'; 
}

}

?>
