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
public function delete($_email1)
{
    $con=usr_class::connect();
    $res=$con->query("select * from user_tbl where usr_email_id='".$_email1."'");
    $row=$res->fetch_assoc();
    unlink($row["image"]);
    $con->query("delete from user_tbl where usr_email_id='".$_email1."'");
    $con->query("delete from membership_tbl where fk_usr_email_id='".$_email1."'");
    $con->query("delete from event_tbl where fk_usr_id='".$_email1."'");
    $con->query("delete from guest_tbl where fk_usr_id='".$_email1."'");
    return $res;
    usr_class::disconnect();

}
public function signup($_email,$_password,$_image,$_fname,$_lname,$_cname,$_mobile,$_address,$_city,$_state,$_zip,$_country,$_type,$_token)
{
    $con=usr_class::connect();
    $_sql="insert into user_tbl values('". $_email ."','". $_password ."','". $_image ."','". $_fname ."','". $_lname ."','". $_cname ."','". $_mobile ."','". $_address ."','". $_city ."','". $_state ."','". $_country ."','". $_zip ."','".$_type."','". $_token ."','". 0 ."')";
    echo $_sql;
    
    $res=$con->query($_sql);
    return $res;
    usr_class::disconnect();

}
public function update($_email,$_password,$_image1,$_fname,$_lname,$_cname,$_mobile,$_address,$_city,$_state,$_zip,$_country)
{
    $con=usr_class::connect();
    if($_image1=="../image/")
    {
        $_sql="update user_tbl set usr_first_name='". $_fname ."',usr_last_name='". $_lname ."',usr_company_name='".$_cname."',usr_country='".$_country."',usr_postal_code='".$_zip."',usr_city='".$_city."',usr_state='".$_state."',usr_address='".$_address."',usr_phone_number='".$_mobile."' where usr_email_id='".$_email."'";
        $res=$con->query($_sql);
        echo $_sql;
    }
    else
    {
        unlink($_image1);
        $_sql="update user_tbl set image='".$_image1."',usr_first_name='". $_fname ."',usr_last_name='". $_lname ."',usr_company_name='".$_cname."',usr_country='".$_country."',usr_postal_code='".$_zip."',usr_city='".$_city."',usr_state='".$_state."',usr_address='".$_address."',usr_phone_number='".$_mobile."' where usr_email_id='".$_email."'";
        $res=$con->query($_sql);
        echo $_sql;
    }
    if($_password!=null)
    {
        $_sql="update user_tbl set usr_password='". $_password ."' where usr_email_id='".$_email."'"; 
        $res=$con->query($_sql);
        echo $_sql;
    }
    echo $_sql;
    
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