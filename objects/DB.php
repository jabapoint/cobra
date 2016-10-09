<?php
  namespace App;
  
  class DB {
    private static $_host;
    private static $_dbname;
    private static $_user;
    private static $_pass;
    private static $_prefix;
    private static $_salt;
    private static $_dbh = null; 
    private static $_dbconnection = array();
    private static $_data = array();
    private static $_request = null;
    private static $_config = array();
    private static $_CONFIG = '/application/config.php';
    private static $_error = null;
  
    public function __construct() {
      self::setConfig();
      $config = self::getConfig(); 
      $mysql = $config['database']['connections']['mysql'];
      self::$_host = $mysql['host'];
      self::$_dbname = $mysql['dbname'];
      self::$_user = $mysql['user'];
      self::$_pass = $mysql['pass'];
      self::$_data['prefix'] = $mysql['prefix'];
      self::$_salt = $config['app']['salt'];
      self::setDBConnection();
      //self::setRequest();
      
      self::getPDO();   
    }
    
    public static function getConfig() {
      return self::$_config;
    }
    
    public static function setConfig() {
      $file = self::root() . self::$_CONFIG ;
      
      if (file_exists($file)) {
        require $file;
        
        self::$_config = $config;
        debug::_(self::$_config);
      } else {
        throw new Exception("FILE_CONFIG_NOT_FOUND");
      } 
    }
    
    public static function root() {
      return $_SERVER['DOCUMENT_ROOT'];
    }

    public static function post() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        return true;          
      }
      
      return false;
    }
    
    public static function setDBConnection() {
      self::$_dbconnection = 
      [
        'host'=>self::$_host,
        'dbname'=>self::$_dbname,
        'user'=>self::$_user,
        'pass'=>self::$_pass 
      ];
    }

    public static function param($name) {
      self::$isRequest();
      
      return self::$_request->$name; 
    }
    
    public static function getPDO($params = null) {
      if ($params == null) {
        //
      } else {
        if ( is_array($params) ) {
          extract($params);  
        } else {
          return $error = new Error();
        }
      }

      try {
        $DBH = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);    
        $DBH->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
        $DBH->query('SET NAMES UTF8');
        self::$_dbh = $DBH;
        return self::$_dbh;
      } catch(PDOException $e) {  
        return $e->getMessage();  
      }  
    }
    
      
  }