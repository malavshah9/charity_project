<?php

class classmem
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","charity_db");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }

    public function getdata($_email)
    {
        $cnn=classmem::connect();
        
        $q="select * from membership_tbl where fk_usr_email_id='".$_email."'";
        $result=$cnn->query($q);
        return $result;
        classmem::disconnect();
    }
public function insert($_email,$_id)
    {
        $cnn=classmem::connect();
        $_date=date("d:m:y");
        $q="select * from membership_tbl where fk_usr_email_id='".$_email."'";
        $result=$cnn->query($q);
        
        if($result->num_rows==0)
        {
            $q="insert into membership_tbl values('". null ."','". $_email ."','". $_id ."','". $_date ."')";
        }
        else
        {
            $q="update membership_tbl set fk_packg_id='".$_id."' where fk_usr_email_id='".$_email."'";
        }
        
        $result=$cnn->query($q);
        return $result;
        classmem::disconnect();
    }
}
?>