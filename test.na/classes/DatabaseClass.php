<?php

class DatabaseClass {

    //put your code here
    public static $instance;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $con;
    public $db;

    public function __construct() {
        $this->db_host = "localhost:3306";
        $this->db_user = "root";
        $this->db_pass = "";
        $this->db_name = "test";
    }
	
	public function GetUser()
	{
		return $this->db_user;
	}
	
	public function GetHost()
	{
		return $this->db_host;
	}
	
	public function GetPass()
	{
		return $this->db_pass;
	}
	
	public function GetDB()
	{
		return $this->db_name;
	}

    public static function currentInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    //CONNECT
    public function connect() {
        if (!$this->con) {
            try {
                $this->db = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_pass);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $e->getMessage();
            }
            if ($this->db) {
                $this->con = true;
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    //DISCONECT
    public function disconnect() {
        if ($this->con) {
            $this->db = null;
            $this->con = false;
            return true;
        } else {
            return false;
        }
    }

    //STATUS
    public function isConnected() {
        if ($this->con) {
            return true;
        }else {
            return false;
        }
    }

}
