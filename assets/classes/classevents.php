<?php

class events
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
   
    public function getallevents()
    {
        $cnn=events::connect();
        $q="select e.*,u.* from event_tbl e,user_tbl u where e.fk_usr_id=u.usr_email_id";
        $result=$cnn->query($q);
        return $result;
        events::disconnect();
    }
    
    

}

?>