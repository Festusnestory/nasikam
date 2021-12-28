<?php

class Login extends tableClass {

    public static $instance;
    public $username;
    public $password;
    public $emp_id;
    public $profile_photo;
    public $table;

    function __construct() {
         $this->table = strtolower(get_class()); $this->GetMetaData();
    }

    public static function currentInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }
    
    public function setPassword($password) {
        // $this->password = md5($password);
        $this->password = ($password);
		$today = Date("Y-m-d 00:00:00");
		$this->password_date = $today;
    }

    public function getEmpID() {
        return $this->emp_id;
    }

    /**
     * @return mixed
     */
    public function getProfilePhoto()
    {
        return $this->profile_photo;
    }

    /**
     * @param mixed $profile_photo
     */
    public function setProfilePhoto($profile_photo)
    {
        $this->profile_photo = $profile_photo;
    }

    function insert($fname, $sname, $username, $password, $emp_id, $profile_photo) {

        $this->username = $username;
        $this->email = $username;
        $this->fname = $fname;
        $this->sname = $sname;
        // $this->password = md5($password);
        $this->password = ($password);
        $this->emp_id = $emp_id;
        $this->profile_photo = $profile_photo;
        $today = Date("Y-m-d 00:00:00");
		$this->password_date = $today;
		// echo (" username: $username, password: $password, emp_id: $emp_id<br />");
		// die();
        $this->store();
    }

    function updateUserLogin($username, $password, $emp_id, $profile_photo="") {
	
	// die("username: $username");
        $this->username = $username;
        // $this->password = md5($password);
        $this->password = ($password);
        $this->emp_id = $emp_id;
        $this->profile_photo = $profile_photo;
		$today = Date("Y-m-d 00:00:00");
		$this->password_date = $today;
        $this->updateWhere('username', $username);
    }
}