<?php
  namespace Object;

  class Registry 
  {
    private static $_instance = null;
    private static $_registry = array();
  
    private function __construct(){ }  // Защищаем от создания через new Singleton
    private function __clone()    { }  // Защищаем от создания через клонирование
    private function __wakeup()   { }  // Защищаем от создания через unserialize
  
    public static function instance() 
    {
      if (is_null(self::$_instance)) {
          self::$_instance = new self;
      }
      
      return self::$_instance;
    }

    public function getId() {

    }
    
    public static function set($key, $obj) 
    {
      self::instance();
      
      if (!isset(self::$_registry[$key])) {
        self::$_registry[$key] = $obj;
      }   
    }
  
    public static function get($key) 
    {
      self::instance();
  
      if (array_key_exists($key, self::$_registry)) {
        return self::$_registry[$key];  
      }
      
      return false;
    }
  } 