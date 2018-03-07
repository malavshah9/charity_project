<?php
 session_start();
 $email=$_SESSION["email_id"];
 
 require '../assets/usr_class.php';
 $obj=new usr_class();
$_SESSION["email_id"]=null;
$_result=$obj->delete($email);
if($_result===true)
{
  header("location:../index.php");
}
else{
    header("location:profile.php");
}

?>