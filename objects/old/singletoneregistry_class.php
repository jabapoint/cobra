<?php
  class SingletonRegistry {
    private static $instance = null;
    private $registry = array();
  
    private function __construct(){ }  // Защищаем от создания через new Singleton
    private function __clone()    { }  // Защищаем от создания через клонирование
    private function __wakeup()   { }  // Защищаем от создания через unserialize
  
    public static function getInstance() {
        if (is_null(self::$instance)) {
          echo "HI";
            self::$instance = new self;
        }
        return self::$instance;
    }
  
    public function set($key, $object) {
        $this->registry[$key] = $object;
    }
  
    public function get($key) {
        return $this->registry[$key];
    }
  } 