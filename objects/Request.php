<?php
  namespace Object;


  /**
   * Class Request
   * @package App
   */
  class Request
  {
    /**
     * @var array|string
     */
    private static $_data = array();

    /**
     * Request constructor.
     */
    public function __construct()
    {
      self::$_data = self::xss($_REQUEST);
    }

    /**
     * @return array|string
     */
    public static function getAll()
    {
      if (count(self::$_data) > 0) {
        return self::$_data;
      }
    }

    /**
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
      if (count(self::$_data) == 0) {
        self::$_data = self::xss($_REQUEST);
      }

      if (is_string($key)) {
        if (key_exists($key, self::$_data)) {
          return self::$_data[$key];
        }
      }
    }

    /**
     * @return bool
     */
    public static function getId()
    {
      if (key_exists('id', self::$_data)) {
        return self::$_data['id'];
      }

      return false;
    }

    /**
     * @param $key
     * @param $data
     */
    public function set($key, $data)
    {
      self::$_data[$key] = $data;
    }

    /**
     * @return array|string
     */
    public function getData()
    {
      return self::$_data;
    }

    /**
     * @param string $name
     * @return bool
     */
    public static function method($name = 'post')
    {
      $name = mb_strtolower($name);

      if ($name == 'post') {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') return true;
      }

      if ($name == 'get') {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') return true;
      }

      return false;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
      if (isset(self::$_data[$name])) return self::$_data[$name];
    }

    /**
     * @param $data
     * @return array|string
     */
    private static function xss($data)
    {
      if (is_array($data)) {
        $escaped = array();
        foreach ($data as $key => $value) {
          $escaped[$key] = self::xss($value);
        }
        return $escaped;
      }
      return trim(htmlspecialchars($data));
    }
  }