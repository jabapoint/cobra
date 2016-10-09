<?php
  namespace App;
  
  class debug {
    public static function _($text = null, $exit = false) {
      if ( ( is_string($text) ) || ( is_int($text) ) ) {
        print "<br>" . $text . "<br>";
      } elseif ( is_object($text) ) {
        print "<br>";
        print_r($text);
        print "<br>";  
      } elseif ( is_array($text) ) {
        print "<br>";
        print_r($text);
        print "<br>";  
      }
      
      if ($exit == true) exit;
      if ( is_null($text) ) print "<br>";
    } 
    
    public static function __($text = null, $exit = false) {
      if ( ( is_string($text) ) || ( is_int($text) ) ) {
        print "<br>" . $text . "<br>";
      } elseif ( is_object($text) ) {
        print "<br>";
        print_r($text);
        print "<br>";  
      } elseif ( is_array($text) ) {
        print "<br>";
        print_r($text);
        print "<br>";  
      }
      
      if ($exit == true) exit;
      if ( is_null($text) ) print "<br>";
    }  
  }