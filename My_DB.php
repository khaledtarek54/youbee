<?php

class DbConnection {
    private $db;
    private $host="localhost";
    private $username="root";
    private $password="";
    private $db_name="system";
    private  $database_connection;
    private static $instance;
   


  
    private function __construct() {
        $this->db = new mysqli("localhost", "root","","system");
    }
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new self();;
        }
        return self::$instance;
    }
    public function getConnection() {
		return $this->db;
    }
    
}

?>