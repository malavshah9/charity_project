<?php
session_start();
$id=$_GET["id"];
$_email=$_SESSION["email_id"];
require '../assets/classes/classmem.php';
$obj=new classmem();
$_result=$obj->insert($_email,$id);
if($_result===true)
{
    header("location:dashboard1.php");
}
?>