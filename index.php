<?php 
session_start();
if(isset($_POST["btsignin"])){
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
$_email1="";  
$_password1="";

$_email1=$_POST["email"];
$_password1=$_POST["password"];
$_flag="";

require './assets/usr_class.php';
$obj=new usr_class();
$_result=$obj->getlogin($_email1);
    $row=$_result->fetch_assoc();
    
    if($row["usr_password"]===$_password1){
        $_flag="a"; 
    
    }

if($_flag==="a")
{

    if($row["usr_verify"]==1)
    {
    $_SESSION["email_id"]=$_email1;
    if($row["usr_type_id"]==1)
    {
header('location:packages/dashboard1.php');
    }
    if($row["usr_type_id"]==2)
    {
header('location:packages/dashboard2.php');
    }
    if($row["usr_type_id"]==3)
    {
header('location:packages/dashboard3.php');
    }
    if($row["usr_type_id"]==4)
    {
header('location:packages/dashboard4.php');
    }
    if($row["usr_type_id"]==5)
    {
header('location:packages/dashboard5.php');
    }
    if($row["usr_type_id"]==6)
    {
header('location:packages/dashboard6.php');
    }
    if($row["usr_type_id"]==7)
    {
header('location:packages/dashboard7.php');
    }
    }
    else
    {
        echo '<div class="btn btn-success btn-lg btn-block">please look your gmail account we have sent you a verification link ,if you did not get it please</div>';
    }
}
else
{
    echo '<button class="btn btn-dark btn-lg btn-block"><h4 class="text-info">username or password invalid<h4></button>';
}
}
}
    

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Welcome to Membership Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="assets\jquery.js"></script>
<script type="text/javascript" src="assets\global.js"></script>
<link href="view\front\cache\master_main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    include 'assets/rightlinks.php';
?>
<div class="wojo-grid">
<div id="logo"><a href="index.php" class="logo"><img src="uploads\logo.png" alt="Membership Manager"></a></div><div id="login-wrap">
  <div class="clearfix" id="tabs"><a class="active"> Sign In</a> <a class="static" href="register\index.php">Signup</a></div>
  <div class="login-form">
    <div class="wojo form" id="loginform">
      <form method="post" id="login_form" name="wojo_form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Email Address" name="email">
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big secondary button" type="submit" name="btsignin"><span class="wojo bold small caps text">Sign In</span></button>
          </div>
          <div class="wojo space divider"></div>
          <a class="inverted" id="passreset">Forgotten Password?</a> </div>
      </form>
    </div>
    <div class="wojo form hide-all" id="passform">
      <form method="post" id="pass_form" name="wojo_form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Email Address" name="pemail">
          </div>
          <div class="field">
            <input type="text" placeholder="First Name" name="fname">
          </div>
        </div>
        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big negative button" name="passreset" type="button"><span class="wojo bold small caps text">Submit</span></button>
          </div>
          <div class="wojo space divider"></div>
          <a class="inverted" id="backto">Back to login</a> </div>
      </form>
    </div>
  </div>
  <div id="message-box"> </div>
</div><!-- Footer -->
</div>
  <footer> Copyright &copy;2018 Membership Manager</footer>
<script type="text/javascript" src="view\front\js\master.js"></script> 
<script type="text/javascript"> 
// <![CDATA[  
$(document).ready(function() {
    $.Master({
		url: "http://www.wojoscripts.com/mmp/view/front",
		surl: "http://www.wojoscripts.com/mmp",
        lang: {
            button_text: "Browse...",
            empty_text: "No file...",
        }
    });
});
// ]]>
</script>
</body>


