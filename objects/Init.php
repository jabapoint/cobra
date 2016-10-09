<?php
  namespace Object;
  
  class Init {
    private $_host;
    private $_dbname;
    private $_user;
    private $_pass;
    private $_prefix;
    private $_salt;
    private $_dbh = null; 
    private $_dbconnection = array();
    private $_data = array();
    private $_request = null;
    private $_config = array();
    const CONFIG = '/application/config.php';
    private static $_error = null;
  
    public function __construct() {
//      $this->setConfig();
//
//      $config = $this->getConfig();
//      $mysql = $config['database']['connections']['mysql'];
//      $this->_host = $mysql['host'];
//      $this->_dbname = $mysql['dbname'];
//      $this->_user = $mysql['user'];
//      $this->_pass = $mysql['pass'];
//      $this->_data['prefix'] = $mysql['prefix'];
//      $this->_salt = $config['app']['salt'];
//      $this->setDBConnection();
//      $this->setRequest();
//
//      $this->getPDO();
    }

    /**
     * @param $name
     * @param string $dir
     * @return mixed
     */
    public static function initClass($name, $dir = '')
    {
      if (class_exists($name)) {
        if ($dir == '') {
          $class = new $name();
        } else {
          $class = new $name($dir);
        }

        if (is_object($class)) {
          return $class;
        } else {
          return false;
          //echo "OBJECT_NOT_EXISTS " . $name;
        }

      } else {
        return false;
        //echo "CLASS_NOT_EXISTS " . $name;
      }
    }

    function getConfig() {
      return $this->_config;
    }
    
    function setConfig() {
      $file = $this->root() . self::CONFIG;
      
      if (file_exists($file)) {
        require $file;
        $this->_config = $config;
      } else {
        throw new Exception("FILE_CONFIG_NOT_FOUND");
      } 
    }
    
    public static function root() {
      return $_SERVER['DOCUMENT_ROOT'];
    }
    
    public function __get($name) {
      $name = trim($name);
    
      if ($name == 'post') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          return true;          
        }
        
        return false;        
      }
    
      if ($name == 'get') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          return true;          
        }
        
        return false;        
      }
      
      // Проверка объекта $_request на NULL 
      $this->isRequest();
      
      if (!empty($name)) {
        return $this->_request->$name;  
      }
      
      return false;      
    }
    
    public static function post() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;          
      }
      
      return false;
    }
    
    public static function get($key = null)
    {
      if (null == $key) {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          return true;
        }

        return false;
      }

      if (array_key_exists($key, $this->_data)) {
        return $this->_data[$key];  
      }
      
      return false; 
    }
    
    public function set($key, $value) {
      $this->_data[$key] = $value;    
    }
    
    public function setDBConnection() {
      $this->_dbconnection = 
      [
        'host'=>$this->_host,
        'dbname'=>$this->_dbname,
        'user'=>$this->_user,
        'pass'=>$this->_pass 
      ];
    }
    
    private function isRequest() {
      if (($this->_request == NULL) || (empty($name))) {
        return false;
      }    
    }
    
    public function param($name) {
      $this->isRequest();
      
      return $this->_request->$name; 
    }
    
    public function getRequest() {
      if ($this->_request == null) {
        return null;
      }
      
      return $this->_request;    
    }
    
    private function setRequest() {
      $request = new Request();
      $this->_request = $request; 
    }

    public function setRegistry($db) {
      $request = new Request();
      $registry = Registry::getInstance();
      $registry->set('db', $db);
      $registry->set('request', $request);
      $prefix = $this->get('prefix');
      $registry->set('prefix', $prefix);
      $registry->set('salt', $this->_salt);
    }

    public function getPDO($params = null) {
      if ($params == null) {
        if (!$this->_dbh == null) {
          return $this->_dbh;  
        } else {
          extract($this->_dbconnection);  
        }
      } else {
        if (is_array($params)) {
          extract($params);
        } else {
          return $error = new Error();
        }
      }

      try {  
        $DBH = new \PDO("mysql:host=$host; dbname=$dbname", $user, $pass);    
        $DBH->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
        $DBH->query('SET NAMES UTF8');
        $this->_dbh = $DBH;
        return $this->_dbh;
      } catch(PDOException $e) {  
        return $e->getMessage();  
      }    
    }
    
    public static function requireFile($file, $name = null) {
      if (file_exists($file)) {
        require $file;
        
        if ( !is_null($name) ) return $$name;

      } else {  
        throw new \Exception('FILE_NOT_FOUND');
      }
    }
    
    public static function msg($text = null) {
      if ( is_string($text) ) {
        print "<br />" . $text . "<br />";
      } elseif ( is_object($text) ) {
        print "<br />";
        print_r($text);
        print "<br />";  
      } elseif ( is_array($text) ) {
        print "<br />";
        print_r($text);
        print "<br />";  
      } 
    }
    
    public static function redirect($name) {
      Header("Location:  " . $name);
      exit;       
    }
    
    public static function getURI() {
      $piecesOfUrl = explode('?', $_SERVER['REQUEST_URI']);
      $piecesOfUrl = explode('/', $piecesOfUrl[0]);
      
      if (is_array($piecesOfUrl)) {
        $key = count($piecesOfUrl) - 1;
      
        if (array_key_exists($key , $piecesOfUrl)) {
          return $piecesOfUrl[$key];  
        } 
      }
      
      return false;
    }
    
    public static function getURIArray() {
      $piecesOfUrl = explode('?', $_SERVER['REQUEST_URI']);
      $piecesOfUrl = explode('/', $piecesOfUrl[0]);

      return $piecesOfUrl;
    }
    
    public static function _404() {
      include _ROOT . '/404.php';
      exit;
    }

  }