<?php

 require_once __DIR__ . '/../init.php';
require_once __DIR__ . '/../tools/utils.php';
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT & ~E_DEPRECATED);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * Description of tableClass
 *
 * @author uriel
 */
class tableClass {

    //public $fields = array();
    protected $last_inserted_id;
    protected $table;
	public $query;

    function bind($data) {
		if (empty($data)) return;
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
    
    public function getLastInsertedId() {
        return $this->last_inserted_id;
    }
	
	protected function storeAudit_Trail($query) {
		// return;
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
			$logged_in_user = GetCurrent_LoggedIn_Username();
			$logged_in_user =  $this->escape($logged_in_user);
			$query =  $this->escape($query);
            $sql = "INSERT INTO audit_trail(query, username, date_time) value('$query', '$logged_in_user', NOW())";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
	
	function escape($value)
    {
        $search = array("\'", '\"');
        $replace = array("'",'"');
		
		$value = str_replace($search, $replace, $value);
				
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

        return str_replace($search, $replace, $value);
    }
	
    public function store_test() {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "INSERT INTO $this->table";
            foreach ($classVars as $key => $value) {
                if ($key == "table" || $key == "instance" || $key == "id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
                $keys .= "`{$key}`,";
				$val =  $this->escape($this->$key);
                $values .= "'{$val}',";
            }
            $sql .= "(" . substr($keys, 0, -1) . ") VALUES(" . substr($values, 0, -1) . ")";
			//echo $sql;

            $sql = str_replace("'NOW()'", "NOW()", $sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $this->last_inserted_id = $db->db->lastInsertId();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
	
	
    protected function store() {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::Store()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "INSERT INTO $this->table";
            foreach ($classVars as $key => $value) {
                if ($key == "table" || $key == "instance" || $key == "id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
                $keys .= "`{$key}`,";
				$val =  $this->escape($this->$key);
                $values .= "'{$val}',";
            }
            $sql .= "(" . substr($keys, 0, -1) . ") VALUES(" . substr($values, 0, -1) . ")";
			//echo $sql;

            $sql = str_replace("'NOW()'", "NOW()", $sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $this->last_inserted_id = $db->db->lastInsertId();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
	
	protected function store1() {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::Store1()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
		// die("val: ".GetCurrent_LoggedIn_UserLevel());
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
			
			//die (print_r($classVars));
            $sql = "INSERT INTO $this->table";
            foreach ($classVars as $key => $value) {
                if ($key == "table" || $key == "instance" || $key == "id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
                $keys .= "`{$key}`,";
				$val =  $this->escape($this->$key);
                $values .= "'{$val}',";
            }
            $sql .= "(" . substr($keys, 0, -1) . ") VALUES(" . substr($values, 0, -1) . ")";
			//echo $sql;
            $sql = str_replace("'NOW()'", "NOW()", $sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $this->last_inserted_id = $db->db->lastInsertId();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }

    public function update($_id="", $field="") {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			if($this->table != "login_activity")
			{
				die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::Update()");
			}
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "`{$key}` = '{$val}',";
            }
			//escape($value)
			//if ($_id == "") $_id = $this->id;
			if ($field == "")
			{
				// if ($this->table == "Aditionals_fields") echo ("sql: ".$sql);
				//if (isset($this->application_id)) $sql = substr($sql, 0, -2) . "' WHERE application_id = '$_id'";
				//else 
				//if ($_id == "")
				{
					$primary_key = $this->primary_key;
					$primary_key_val = $this->$primary_key;
					$sql = substr($sql, 0, -2) . "' WHERE $primary_key = '$primary_key_val'";
					
				}
				//else $sql = substr($sql, 0, -2) . "' WHERE ".$this->primary_key." = '$_id'";
				//die($sql);
				// if ($this->table == "Aditionals_fields") die(": after: ".$sql);
			}
			else{
				 $sql = substr($sql, 0, -2) . "' WHERE `$field` = '$_id'";
				//$sql .= "' WHERE `$field` = '$_id'";
			}
            $sql = str_replace("'NOW()'", "NOW()", $sql);
			//die($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.'; '.$sql.';  ' . $e->getMessage();
        }
        $db->disconnect();
    }
	
	public function update1($_id="", $field="") {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::update1()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars($this);
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "{$key} = '{$val}',";
            }
			
			//if ($_id == "") $_id = $this->id;
			if ($field == "")
			{
				if (isset($this->application_id)) $sql = substr($sql, 0, -2) . "' WHERE application_id = '$_id'";
				else  $sql = substr($sql, 0, -2) . "' WHERE id = '$_id'";
			}
			else{
				 $sql = substr($sql, 0, -2) . "' WHERE `$field` = '$_id'";
				// $sql .= "' WHERE `$field` = '$_id'";
			}
			// die ($sql);
            $sql = str_replace("'NOW()'", "NOW()", $sql);
			$this->query = $sql;
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.'; '.$sql.';  ' . $e->getMessage();
        }
        $db->disconnect();
    }
	
	public function update2($_id="", $field="") {
		
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "{$key} = '{$val}',";
            }
			
			//if ($_id == "") $_id = $this->id;
			if ($field == "")
			{
				// if ($this->table == "Aditionals_fields") echo ("sql: ".$sql);
				//if (isset($this->application_id)) $sql = substr($sql, 0, -2) . "' WHERE application_id = '$_id'";
				//else 
				//if ($_id == "")
				{
					$primary_key = $this->primary_key;
					$primary_key_val = $this->$primary_key;
					$sql = substr($sql, 0, -2) . "' WHERE $primary_key = '$primary_key_val'";
					
				}
				//else $sql = substr($sql, 0, -2) . "' WHERE ".$this->primary_key." = '$_id'";
				die($sql);
				// if ($this->table == "Aditionals_fields") die(": after: ".$sql);
			}
			else{
				 $sql = substr($sql, 0, -2) . "' WHERE `$field` = '$_id'";
				//$sql .= "' WHERE `$field` = '$_id'";
			}
            $sql = str_replace("'NOW()'", "NOW()", $sql);
			//die($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.'; '.$sql.';  ' . $e->getMessage();
        }
        $db->disconnect();
    }
	
	
    
    public function updateWhere($condition, $_value) {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::updateWhere()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "{$key} = '{$val}',";
            }
            $sql = substr($sql, 0, -2) . "' WHERE {$condition} = '$_value'";
            $sql = str_replace("'NOW()'", "NOW()", $sql);
			// die ($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
    
    public function updateWhereCond($condition) {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::updateWhereCond()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "{$key} = '{$val}',";
            }
            $sql = substr($sql, 0, -2) . "' WHERE {$condition}";
            $sql = str_replace("'NOW()'", "NOW()", $sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
    
    public function updateWhere2($condition, $_value, $condition2, $_value2) {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.::updateWhere2()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
            $keys = "";
            $values = "";
            $classVars = get_object_vars(($this));
            $sql = "UPDATE $this->table SET ";
            foreach ($classVars as $key => $value) {
                if ($key == "id" || $key == "table" || $key == "instance" || $key == "application_id" || $key == "last_inserted_id" || $key == "primary_key" || $key == "query") {
                    continue;
                }
				$val = $this->escape($this->$key);
                $sql .= "{$key} = '{$val}',";
            }
            $sql = substr($sql, 0, -2) . "' WHERE {$condition} = '$_value' AND {$condition2} = '$_value2' ";
            $sql = str_replace("'NOW()'", "NOW()", $sql);
            //die($sql);
			$this->query = $sql; 
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }

    public function select($_id) {
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "SELECT * FROM {$this->table} WHERE application_id = '{$_id}'";
            //var_dump($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        if ($row) {
            $this->bind($row);
        }
        $db->disconnect();
    }

    public function selectWhere($_condition, $_id) {
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "SELECT * FROM {$this->table} WHERE $_condition = '{$_id}'";
			// echo $sql;
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $this->bind($row);
        $db->disconnect();
    }

    public function selectWhere2Conditions($_condition1, $_condition2, $_id, $_id2) {
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
				$_id = ($_id);
				$_id2 = ($_id2);
            $sql = "SELECT * FROM {$this->table} WHERE $_condition1 = '{$_id}' AND $_condition2 = '{$_id2}'";
            //echo($sql);
			$this->query = $sql; 
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
		if (empty($row)) return null;
        $this->bind($row);
        $db->disconnect();
		$newObject = clone($this);
        $array_list[] = $newObject;
		return $array_list;
    }
	
	
	public function Insert()
	{
		$this->store1();
	}
	
	
	public function Insert1()
	{
		$this->store1();
	}
	
	public function TableExists()
	{
		 $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
				$sql = "DESCRIBE {$this->table}";
				//$this->last_inserted_id = $db->db->lastInsertId();
				$stmt = $db->db->prepare($sql);
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// die(var_dump($row));
			} catch (PDOException $e) 
			{
				
				return false;
			}
		return true;
		
	}
	
	public function GetMetaData() {
		
		if (!$this->TableExists()) return false;
		
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        try {
				$sql = "DESCRIBE {$this->table}";
				//$this->last_inserted_id = $db->db->lastInsertId();
				$stmt = $db->db->prepare($sql);
				$stmt->execute();
				$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// die(var_dump($row));
			} catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        } 
		$obj = new stdClass();
        foreach ($row as $key => $value) {
			// echo var_dump($value)."<br />";
			// echo $value["Key"]."<br />";
			foreach ($value as $key1 => $val) {
				if (strpos($value["Key"], "PRI") !== false) 
				{
					// echo "primary key: ".$val;
					 $obj->primary_key = $val;
				}
				 $obj->$val = "";
				 
				break;
			}
			
        }
		foreach ($obj as $key => $value) {
			//echo "$value<br />";
			$this->bind($obj);
			$newObject = clone($this);
			$array_list[] = $newObject;
        }
		
        $db->disconnect();
        return $array_list;
    }

    public function selectAll($condition = "") {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            if ($condition != "") {
                $sql = "SELECT {$condition} FROM {$this->table}";
            }else{
                $sql = "SELECT * FROM {$this->table}";
            }
            $this->last_inserted_id = $db->db->lastInsertId();
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }
    
    public function selectAllOrderBy($column, $order="", $par="", $alias="") {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $flag = false;
            if ($alias != ""){
                $flag = true;
            }
            if ($par != ""){
                if ($flag === true){
                    $sql = "SELECT * FROM {$this->table} {$alias} WHERE id = {$par} ORDER BY {$column} {$order}";
                }else{
                    $sql = "SELECT * FROM {$this->table} WHERE id = {$par} ORDER BY {$column} {$order}";
                }
            }else{
                $sql = "SELECT * FROM {$this->table} ORDER BY {$column} {$order}";
            }
            //die($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }

    public function selectAllWhere($condition, $val, $wherPart="", $val_dist="") {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();
		$val = ($val);
		$wherPart = ($wherPart);
		
        try {
            if ($wherPart === ""){
                $sql = "SELECT * FROM {$this->table} WHERE $condition = '$val'";
            }else if($val_dist === ""){
                $sql = "SELECT DISTINCT * FROM {$this->table} WHERE $condition  ='$val'";
            }else{
                $sql = "SELECT * FROM {$this->table} WHERE $condition = $wherPart";
            }
            $stmt = $db->db->prepare($sql);
            //var_dump($stmt);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
		$this->query = $sql;
        return $array_list;
    }
    
    public function OlderByAndGroupBy($condition, $val1, $val2) {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "SELECT {$condition} FROM {$this->table} GROUP BY {$val1} ORDER BY {$val2}";
            //die($sql);
            $stmt = $db->db->prepare($sql);
            //var_dump($stmt);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }
    
    public function selectAllWhere2($condition, $val, $condition2, $val2) {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();
		$val = ($val);
		$val2 = ($val2);
		
		

        try {
            $sql = "SELECT * FROM {$this->table} WHERE $condition = '$val' AND $condition2 = '$val2'";
			$this->query = $sql; 
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }
    
    public function selectAllWhere3($condition, $val, $condition2, $val2) {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();
		$val = ($val);
		$val2 = ($val2);
        try {
            $sql = "SELECT * FROM {$this->table} WHERE $condition '$val' AND $condition2 '$val2'";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }
    
    public function selectAllWhereG($condition) {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "SELECT * FROM {$this->table} WHERE {$condition} ";
			$this->query = $sql;
            $stmt = $db->db->prepare($sql);
			//die ("sql=".$sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }

    public function selectItemWhere($item, $condition, $val) {
        $array_list = array();
        $db = DatabaseClass::currentInstance();
        $db->connect();
		$val = ($val);
        try {
            $sql = "SELECT $item FROM {$this->table} WHERE $condition = '$val'";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }

    public function deleteApplicant($_id) {
        if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.deleteApplicant()");
		}
		 if ($_id == "") return;
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $sql = "DELETE FROM {$this->table} WHERE application_id = '{$_id}'";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
    
    public function delete($_condition="", $_id="") {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.delete()");
		}
        if ($_id == "") return;
        if ($_condition == "") return;
		
        $db = DatabaseClass::currentInstance();
        $db->connect();
        $cond = $_condition; 
		$cond = ($cond);
        try {
			if ($_condition == "" || $_id == "")
			{
				if (!isset($this->primary_key))
				{
					return false;
				}
				$_condition = $this->primary_key;
				$primary_key = $this->primary_key;
				$_id = $this->$primary_key;
			}
            if ($_condition != "" && $_id != "") $sql = "DELETE FROM {$this->table} WHERE {$_condition} = '{$_id}'";
			else $sql = "DELETE FROM {$this->table} WHERE {$cond}";
			$this->query = $sql;
			// die($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
    public function delete1($_condition="") {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.delete1()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
		
        $cond = $_condition; 
		$cond = ($cond);
        try {
			$sql = "DELETE FROM {$this->table} WHERE {$cond}";
			$this->query = $sql;
			// die($sql);
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }

    public function truncate() {
		if (GetCurrent_LoggedIn_UserLevel() == "Auditor")
		{
			die("Sorry, you do not have permissions to perform this action! Contact the System Administrator for more information.truncate()");
		}
        $db = DatabaseClass::currentInstance();
        $db->connect();
        try {
            $sql = "TRUNCATE TABLE {$this->table}";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
			$this->storeAudit_Trail($sql);
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }

    public function lock() {
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "LOCK TABLES {$this->table} READ";
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }

    public function unlock() {
        $db = DatabaseClass::currentInstance();
        $db->connect();

        try {
            $sql = "UNLOCK TABLES";
            $stmt = $db->db->prepare($sql);
			$this->query = $sql;
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        $db->disconnect();
    }
    
    public function selectFields($fields="*", $group="", $join="", $condition="", $orderby="") {
        $array_list = array();
		
        $db = DatabaseClass::currentInstance();
        $db->connect();
		if ($fields == "") $fields = "*";
        try {
            $sql = "SELECT {$fields} FROM {$this->table} ";
            if($join != ""){
                $sql .= "{$join} ";
            }
            if($condition != ""){
                $sql .= "WHERE {$condition} ";
            }
            if($group != ""){
                $sql .= "GROUP BY {$group} ";
            }
            if($orderby != ""){
                $sql .= "ORDER BY {$orderby} ";
            }
            
            // echo $sql;
			$this->query = $sql;
            $stmt = $db->db->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $total_column = $stmt->columnCount();
            $columns = array();
            for($counter = 0; $counter < $total_column; $counter++){
                $meta = $stmt->getColumnMeta($counter);
                $columns[] = $meta['name'];
            }
            $this->fields = $columns;
            
        } catch (PDOException $e) {
            echo 'Error! '.$this->table.'; '.$sql.';  ' . $e->getMessage(); die();
        }
        foreach ($row as $key => $value) {
            $this->bind($value);
            $newObject = clone($this);
            $array_list[] = $newObject;
        }
        $db->disconnect();
        return $array_list;
    }

}
