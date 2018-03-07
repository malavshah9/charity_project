<?php

echo !extension_loaded('openssl')?"Not Available":"Available";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
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
   $_type=1;
$_email=$_POST["email"];
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
   $_captcha=$_POST["captcha"];
   
$target_dir="../image/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
else
{
    echo 'file not uploaded';
}
$_image1=$target_file;

$string=md5(rand());
    $_token=substr($string,0,6);
require '../assets/usr_class.php';
$obj=new usr_class();
$_result=$obj->signup($_email,$_password,$_fname,$_lname,$_cname,$_mobile,$_address,$_city,$_state,$_zip,$_country,$_type,$_token);

if($_result===true)
{
    
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "../phpmailer/class.phpmailer.php";
require_once "../phpmailer/class.smtp.php";
require_once "../phpmailer/class.phpmailer.php";
require_once "../phpmailer/PHPMailerAutoload.php";
$message="verify.php?token=".$token."&email=".$_email."";

// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = '';

// your password must be enclosed in single quotes
$mail->Password = '';

// add a subject line
$mail->Subject = ' verification ';

// Sender email address and name
$mail->SetFrom('', 'verification account link');

$email1=$_email;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = 'Mail send successfully please verify your account <a href="mail.gmail.com">click me to verify</a>';
    
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;

   header('location:login.php');
}
else
{
    echo "Not Successfull";
}

}

?>