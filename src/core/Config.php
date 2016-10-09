<?php
/**
 * Created by PhpStorm.
 * User: SERGEY
 * Date: 09.07.2016
 * Time: 13:49
 */

namespace Core;

class Config {
  private $_data;
  private static $_instance;

  private function __construct() {
    $json = file_get_contents(ROOT . '/config/app.json');
    $this->_data = json_decode($json, true);
  }

  public static function getInstance()
  {
    if (self::$_instance == null) {
      self::$_instance = new Config();
    }

    return self::$_instance;
  }

  public function get($key) {
    if (!isset($this->_data[$key])) {
      throw new NotFoundException("Key $key not in config.");
    }

    return $this->_data[$key];
  }
}

