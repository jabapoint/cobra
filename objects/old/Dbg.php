<?php
  namespace App;
  
  class Dbg {
    public static function _($text = null, $exit = false) {
      if ( ( is_string($text) ) || ( is_int($text) ) ) {
        print "\n" . $text . "\n";
      } elseif ( is_object($text) ) {
        print "\n";
        print_r($text);
        print "\n";  
      } elseif ( is_array($text) ) {
        print "\n";
        print_r($text);
        print "\n";  
      }
      
      if ($exit == true) exit;
      if ( is_null($text) ) print "\n";
    } 
    
    public static function __($text = null, $exit = false) {
      if ( ( is_string($text) ) || ( is_int($text) ) ) {
        print "\n" . $text . "\n";
      } elseif ( is_object($text) ) {
        print "\n";
        print_r($text);
        print "\n";  
      } elseif ( is_array($text) ) {
        print "\n";
        print_r($text);
        print "\n";  
      }
      
      if ($exit == true) exit;
      if ( is_null($text) ) print "\n";
    }  
  }