<?php
class usr_class{
private static $con=null;
private static function connect()
{
    self::$con=mysqli_connect('localhost','root','','charity_db');
    return self::$con;

}
private static function disconnect()
{
    mysqli_close(self::$con);
     self::$con=null;
    
}

public function getlogin($_email1)
{
    $con=usr_class::connect();
    $res=$con->query("select * from user_tbl where usr_email_id='".$_email1."'");
    
    return $res;
    usr_class::disconnect();

}
public function signup($_email,$_password,$_fname,$_lname,$_cname,$_mobile,$_address,$_city,$_state,$_zip,$_country,$_type,$_token)
{
    $con=usr_class::connect();
    $_sql="insert into user_tbl values('". $_email ."','". $_password ."','". $_fname ."','". $_lname ."','". $_cname ."','". $_mobile ."','". $_address ."','". $_city ."','". $_state ."','". $_country ."','". $_zip ."','".$_type."','". $_token ."','". 0 ."')";
    echo $_sql;
    
    $res=$con->query($_sql);
    return $res;
    usr_class::disconnect();

}
public function update($_name,$_mobile,$_gender,$_image1,$_image,$_email)
{
    $con=usr_class::connect();
    if($_image=="../image/")
    {
        $_sql="update user_tbl set uname='". $_name ."',contact_no='". $_mobile ."',gender='". $_gender ."' where email_id='".$_email."'";
    }
    else
    {
        unlink($_image1);
    $_sql="update user_tbl set uname='". $_name ."',contact_no='". $_mobile ."',gender='". $_gender ."',image='". $_image ."' where email_id='".$_email."'";
    
    }
    $res=$con->query($_sql);
    return $res;
    usr_class::disconnect();

}
public function updatepass($_email1,$_password,$_newpass)
{
    $con=usr_class::connect();
    $result=$con->query("select * from user_tbl where email_id= '".$_email1."' and password='".$_password."' ");
    if($result->num_rows==1)
    {
        $_sql="update user_tbl set password='". $_newpass ."' where email_id='".$_email1."'";
        $res=$con->query($_sql);
    }
    else
    {
    $res="old password is wrong";
    }

    return $res;
    usr_class::disconnect();

}
public function updatepassforgot($_email1,$_newpass,$token)
{
$con=usr_class::connect();
    $result=$con->query("select * from user_tbl where email_id= '".$_email1."' and token='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_tbl set password='". $_newpass ."' where email_id='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    usr_class::disconnect();

}
public function verify($_email1,$token)
{
$con=usr_class::connect();
    $result=$con->query("select * from user_tbl where email_id= '".$_email1."' and token='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_tbl set verify=1 where email_id='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    usr_class::disconnect();

}



}
?>