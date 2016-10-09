<?php
  namespace Core;

  class Model
  { 
    public static $message_error = 0;
    
    public static function GetError()
    {
      return self::$message_error;  
    }
  }
