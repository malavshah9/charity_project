<?php

class pckgs
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
   
    public function getallpckgs()
    {
        $cnn=pckgs::connect();
        $q="select * from packg_tbl";
        $result=$cnn->query($q);
        return $result;
        pckgs::disconnect();
    }
    
    

}

?>