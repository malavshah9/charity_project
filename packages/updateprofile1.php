<?php
session_start();
echo !extension_loaded('openssl')?"Not Available":"Available";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email=$_SESSION["email_id"];
    $_fname="";
    $_lname="";
    $_cname="";
    $_password="";
    $_mobile="";
   $_address="";
   $_state="";
   $_country="";
   $_zip="";
   $_city="";
   $_captcha="";
   $_image="";
   $_type="";


$_fname=$_POST["fname"];
$_lname=$_POST["lname"];
$_cname=$_POST["company"];
$_password=$_POST["password"];
$_mobile=$_POST["mobile"];
$_address=$_POST["address"];
$_state=$_POST["state"];
$_country=$_POST["country"];
$_zip=$_POST["zip"];
$_city=$_POST["city"];
   
   
$target_dir="../image/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
echo $target_file."<br>";
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
else
{
    echo 'file not uploaded';
}
$_image1=$target_file;


require '../assets/usr_class.php';
$obj=new usr_class();
$_result=$obj->update($_email,$_password,$_image1,$_fname,$_lname,$_cname,$_mobile,$_address,$_city,$_state,$_zip,$_country);

if($_result===true)
{
    header('location:profile1.php');
}
else
{
    echo "Not Successfull";
}

}

?>