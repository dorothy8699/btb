<?php  

class DB {
    protected $db;
    public function __construct(){
        $config = parse_ini_file('config/config.ini');
        $this->db = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
    }

    public function begin(){
       $this->db->autocommit(false);
    }

    public function commit(){
       $this->db->commit();
    }  

    public function rollback(){
       $this->db->rollback();
    }
      
}