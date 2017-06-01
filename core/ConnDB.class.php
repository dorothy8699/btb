<?php  
     
class ConnDB{
   public $result;
   private static $conn;
   
   private function __construct(){
           self::$conn = mysql_connect("localhost","dorothy","dorothy123");
           if (!self::$conn) {
              die('Could not connect: ' . mysql_error());
           }
   }

   public static function getInstance(){
          if(is_null(self::$conn)){
            self:$conn = new ConnDB;
          }
          return self::$conn;
   }
   
   public function __clone(){
          trigger_error('Clone is forbidden!');
    }

}


