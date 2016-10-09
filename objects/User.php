<?php
  class User {
    private $_db;
  	private $_table;
    private $_name;
    private $_login;
    private $_password;
    private $_error;
    private $_role;
  	
  	public function __construct($table) {
      $this->_db = Registry::get('db');
      $prefix = Registry::get('prefix');
      $this->_table = $prefix . '_' . $table;
    }
    
    // Реализация алгоритма шифрования пароля
    public function cryptPass($password) {
      // Шифруем 
      $salt = Registry::get('salt');
      $pass = crypt($password, $salt);
      $pass = crypt($pass . $salt, $salt);
      
      // Вырезаем соль
      $part = substr($pass, 0, 7);
      $common = substr($pass, 29, 32);
      $pass = $part . $common;
      
      return $pass;       
    }
    
    public function init($login = false, $password = false) {
      $this->logout();
      $pass = $this->cryptPass($password);
    
      // Делаем запрос в БД
      $sql = "SELECT name, username FROM $this->_table WHERE password = :pass";

      try {
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_LAZY);
        $count = $stmt->rowCount();
        
        if ($count > 0) {
          $this->set('name', $row->name);
          $this->set('login', $row->username);          
          $this->login();
        }
            
        $data = ['count'=>$count, 'error'=>$this->_error];
        return $data;
      } catch(Exception $e) {
        $this->_error = 'Message: ' . $e->getMessage();
        $data = ['count'=>'0', 'error'=>$this->_error];
        return $data;
      }
  	}
    
    public function set($param_name, $param_value) {
      switch ($param_name) {
        case 'name': $this->_name = $param_value; break;
        case 'username': $this->_username = $param_value; break;
        case 'login': $this->_login = $param_value; break;
        case 'password': $this->_password = $param_value; break;
        case 'role': $this->_role = $param_value; break;
        case 'error': $this->_error = $param_value; break;
      }	  		
  	}

    public function get($param) {
      switch ($param) {
        case 'login': return $this->_login; break;
        case 'password': return $this->_password; break;
        case 'role': return $this->_role; break;
        case 'error': return $this->_error; break;
      }	
  	}
  	
  	public function login() {
      session_cache_expire(1);
    
  		if (!session_id()) {
        session_start();
        $session_id = session_id();
        
        if (isset($this->_login)) {
          $_SESSION["name"] = $this->_name;
          $_SESSION["login"] = $this->_login;
          $_SESSION["session_id"] = $session_id;
          return true;  
        } else {
          return false;  
        } 
      }    
  	}
  	
  	public function logout() {
  		if (!session_id()) session_start();
      
  		unset($_SESSION["login"]);
      unset($_SESSION["name"]);
      unset($_SESSION["session_id"]);
  	}
  
  	public function getSecretKey() {
  		//return $this::hash($this->password, Config::SECRET);
  	}	
  }

?>