<?php
  namespace Core;

  use PDO;

  class Db {
    private static $instance;
    private static function connect(): PDO {
      $dbConfig = Config::getInstance()->get('db');
      $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'] ;
      return new PDO(
        $dsn,
        $dbConfig['user'],
        $dbConfig['password']
      );
    }
    public static function getInstance(){
      if (self::$instance == null) {
        self::$instance = self::connect();
      }
      return self::$instance;
    }
  }