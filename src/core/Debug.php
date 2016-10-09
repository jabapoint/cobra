<?php

namespace Core;

class Debug
{
  private static $_instance;

  private function __construct() {}

  private function __clone() {}

  private function __wakeup() {}

  public static function getInstance() {
    if (self::$_instance === null) {
      self::$_instance = new self;
    }

    return self::$_instance;
  }

  public static function _exit()
  {
    exit;
  }

  public static function _print($data)
  {
    print_r($data);
    echo '<br><br>';
    return self::getInstance();
  }
}