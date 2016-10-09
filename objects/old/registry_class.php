<?php
  class Registry {
    private static $_instance = null;
    private static $_registry = array();
  
    private function __construct(){ }  // Защищаем от создания через new Singleton
    private function __clone()    { }  // Защищаем от создания через клонирование
    private function __wakeup()   { }  // Защищаем от создания через unserialize
  
    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
    public static function GetControllerName() {
      $controllerName = mb_strtolower(self::get('ControllerName'));
      return $controllerName;       
    }
    
    public static function redirect($name) {
        header("Location: $name");
        exit;
    }
    
    public static function set($key, $object) {
        self::getInstance();
        
        if (!isset(self::$_registry[$key])) {
          self::$_registry[$key] = $object;
        }   
    }
  
    public static function get($key) {
        self::getInstance();
    
        if (array_key_exists($key, self::$_registry)) {
          return self::$_registry[$key];  
        }
        
        return false;
    }
  } 