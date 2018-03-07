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
    
    public function geteventsbyuid($uid)
    {
        $cnn=events::connect();
        $q="select e.*,u.* from event_tbl e,user_tbl u where e.fk_usr_id=u.usr_email_id and e.fk_usr_id='".$uid."'";
        $result=$cnn->query($q);
        return $result;
        events::disconnect();
    }
    public function insertevent($ename,$edesc,$elogo,$uid)
    {
        $cnn=events::connect();
        $q="insert into event_tbl values('".null."','".$ename."','".$edesc."','".$elogo."','".$uid."')";
        $result=$cnn->query($q);
        return $result;
        events::disconnect();
    }
    public function getguestlist($uid)
    {
        $cnn=events::connect();
        $q="select u.*,g.*,e.* from user_tbl u,guest_tbl g,event_tbl e where g.fk_event_id=e.pk_event_id and g.fk_usr_id=u.usr_email_id and e.fk_usr_id='".$uid."'";
        $result=$cnn->query($q);
        return $result;
        events::disconnect();
    }
    public function deleteguest($gid)
    {
        $cnn=events::connect();
        $q="delete from guest_tbl where guest_id='".$gid."'";
        $result=$cnn->query($q);
        return $result;
        events::disconnect();
    }
    

}

?>