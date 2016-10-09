
<?php
  /*$str = "fgfgfg  fgf fgfgfgfg123gfg"; 
  $str = preg_replace("/(\s){2,}/", ' ', $str);
  print $str;
  exit;*/
?>

<!DOCTYPE html>
<html lang="ru">  
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
  </head>
  <body>
    <script type="text/javascript">
      jQuery(function($){         
        //alert('');  
      }); 
    </script>
    
    <div id="" class="">
      
      <?php
      
        /**
         * Класс Polyndrom определяет является ли строка текста полиндромом (читается с обоих сторон одинаково) и осуществляет вывод строки следующим способом:
         * а) если строка является полиндромом, то она выводится полностью.
         * б) если строка не является полиндромом - выводится самый длинный первый под-полиндром этой строки, т.е. самая длинная часть строки, являющаяся полиндромом.
         * в) если подполиндромы отсутствуют в строке - выводится первый символ строки.
         */ 
        class Polindrom
        {
          private $_textPolindrom;
          private $_countPolindrom = 3;
          private $_partPolindrom = array();

          /**
           * Конструктор класса проверяет и инициализирует входные данные
           *
           * @param string $data
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка либо генерируется исключение.
           */           
          function __construct($data) {
            if ( is_string($data) ) {
              $this->_textPolindrom = $this->oneTrim($data);
      
            } else {
              throw new Exception('ERROR_WRONG_FORMAT');
            }
            
            if ( empty($data) ) throw new Exception('ERROR_EMPTY_PARAM');    
          }
 
          /**
           * Главный метод, точка входа в программу 
           *
           * @return string
           * Возвращается строка.
           */                     
          public function isPolindrom() {
            $text = $this->strtolowerUTF8($this->fullTrim($this->_textPolindrom));
            $text_reversed = $this->strReversed($text);

            //Если полиндром не вся строка целиком, то запускаем метод поиска под-полиндромов в строке searchPolindrom()
            return ($this->isEqual($text, $text_reversed)) ? $this->_textPolindrom : $this->searchPolindrom();
          }

          /**
           * Проверка 2-х строк на равенство
           *
           * @param string $text
           * Строка, включающая в себя любые символы.
           *
           * @param string $text_reversed
           * Строка, включающая в себя любые символы.
           *
           * @return boolean
           */           
          private function isEqual($text, $text_reversed) {
            if ( empty($text) ) return false; 
            return ($text === $text_reversed) ? true : false;    
          }
          
          /**
           * Убираем все пробелы в строке
           *
           * @param string $str
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка без пробелов.
           */             
          private function fullTrim($str) {                                                    
            return trim(preg_replace('/\s+/', '', $str));                                                   
          }
          
          /**
           * Метод убирает лишние пробелы в строке
           *
           * @param string $str
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка.
           */ 
          private function oneTrim($str) {                                                    
            return trim(preg_replace('/(\s){2,}/', ' ', $str));                                                   
          }

          /**
           * Перевертываем строку, метод сделан для работы с кириллическими символами
           *
           * @param string $s
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка.
           */           
          private function strReversed($s) {
            preg_match_all('/./u', $s, $a);
            return implode('', array_reverse($a[0])); 
          }

          /**
           * Метод переводит строку в нижний регистр, работает с кириллицей
           *
           * @param string $str
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка.
           */   
          private function strtolowerUTF8($str) {
            return mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
          }
          
          /**
           * Ищем под-полиндромы; метод определяет максимальный по размеру полиндром в строке либо просто возвращает первый символ строки 
           *
           * @return string
           * Возвращается строка.
           */  
          private function searchPolindrom() {
            $text = $this->_textPolindrom;
            $len = $this->strCount($text);
            $subtext_array = array();
            
            for ($i = 0; $i < $len; $i++) {
              $subtext = mb_substr($text, $i, $len - $i, 'utf-8');
              if ($this->strCount($subtext) > $this->_countPolindrom - 1) $subtext_array[] = $subtext;
              $sublen = $this->strCount($subtext);

              for ($j = 0; $j < $sublen - 1; $j++) {
                $subsubtext = mb_substr($subtext, 0, -$j - 1, 'utf-8');
                if ($this->strCount($subsubtext) > $this->_countPolindrom - 1) $subtext_array[] = $subsubtext;
              }  
            }
          
            foreach ($subtext_array as $item) {
              $txt = $this->strtolowerUTF8(($this->fullTrim($item)));
              $txt_reversed = $this->strReversed($txt);
              
              
              if ($this->isEqual($txt, $txt_reversed)) {
                $this->_partPolindrom[] = $item;
              }
            }
            
            if (count($this->_partPolindrom) > 0) {
              $max_size = $this->_countPolindrom;
              $polyndrom = $this->_partPolindrom[0];

              foreach ($this->_partPolindrom as $item) { 
                if ( $this->strCount($item) >  $max_size) {
                  $max_size = $this->strCount($item);
                  $polyndrom = $item;
                }  
              }
              
              return $polyndrom;  
            } else {
              return mb_substr($text, 0, 1, 'utf-8');  
            }  
 
            return ( count($this->_partPolindrom) > 0 ) ? $this->_partPolindrom : mb_substr($text, 0, 1, 'utf-8');   
          }

          /**
           * Метод подсчитывает количество символов в строке, работает с кириллицей
           *
           * @param string $str
           * Строка, включающая в себя любые символы.
           *
           * @return string
           * Возвращается строка.
           */         
          private function strCount($str) {
            return iconv_strlen($str, 'UTF-8');             
          }           
        }
 
        // Запускаем программу
        // Аргентина  манит   негра 2
        // Призмап опт  от        
        
        try {
          $param = 'Призмап опт  от'; // Входной параметр
          $param_arr = array(); // Параметр для проверки отработки исключений
          $obj = new Polindrom($param);
          $data = $obj->isPolindrom();
          print_r($data);
  
          //$zxc = utf8ToCode('Ы');
          //print_r($zxc);
          //$str = "Hello Friend, I am good!";
          //$arr1 = str_split($str);
          //$arr2 = str_split($str, 3);         
          //print_r($arr1);
          //print_r($arr2);        
        } 
        
        catch (Exception $e) {
          print "Сообщение: " . $e->getMessage();
        } 








        
/**
 * Преобразование кода символа Юникода в символ в UTF-8
 *
 * @param int $code
 * Код символа из диапазона Юникода.
 *
 * @return string
 * Символ с соответствующим кодом в кодировке UTF-8.
 *
 * @throws RangeException
 */
function codeToUtf8_($code) {
    $code = (int) $code;
 
    if ($code < 0) {
        throw new RangeException("Negative value was passed");
    }
    # 0-------
    elseif ($code <= 0x7F) {
        return chr($code);
    }
    # 110----- 10------
    elseif ($code <= 0x7FF) {
        return chr($code >> 6 | 0xC0)
            . chr($code & 0x3F | 0x80)
        ;
    }
    # 1110---- 10------ 10------
    elseif ($code <= 0xFFFF) {
        return chr($code >> 12 | 0xE0)
            . chr($code >> 6 & 0x3F | 0x80)
            . chr($code & 0x3F | 0x80)
        ;
    }
    # 11110--- 10------ 10------ 10------
    elseif ($code <= 0x1FFFFF) {
        return chr($code >> 18 | 0xF0)
            . chr($code >> 12 & 0x3F | 0x80)
            . chr($code >> 6 & 0x3F | 0x80)
            . chr($code & 0x3F | 0x80)
        ;
    }
    # 111110-- 10------ 10------ 10------ 10------
    elseif ($code <= 0x3FFFFFF) {
        return chr($code >> 24 | 0xF8)
            . chr($code >> 18 & 0x3F | 0x80)
            . chr($code >> 12 & 0x3F | 0x80)
            . chr($code >> 6 & 0x3F | 0x80)
            . chr($code & 0x3F | 0x80)
        ;
    }
    # 1111110- 10------ 10------ 10------ 10------ 10------
    elseif ($code <= 0x7FFFFFFF) {
        return chr($code >> 30 | 0xFC)
            . chr($code >> 24 & 0x3F | 0x80)
            . chr($code >> 18 & 0x3F | 0x80)
            . chr($code >> 12 & 0x3F | 0x80)
            . chr($code >> 6 & 0x3F | 0x80)
            . chr($code & 0x3F | 0x80)
        ;
    }
    else {
        throw new RangeException("Invalid character code");
    }
}
 
/**
 * Получение кода символа Юникода
 *
 * @param string $utf8Char
 * Символ в кодировке UTF-8. Если в строке содержится больше одного символа
 * UTF-8, то учитывается только первый.
 *
 * @return int
 * Код символа из Юникода.
 *
 * @throws InvalidArgumentException
 */
function utf8ToCode_($utf8Char) {
    $utf8Char = (string) $utf8Char;
 
    if ("" == $utf8Char) {
        throw new InvalidArgumentException("Empty string is not valid character");
    }
 
    # [a, b, c, d, e, f]
    $bytes = array_map('ord', str_split(substr($utf8Char, 0, 6), 1));
    
    
 
    # a, [b, c, d, e, f]
    $first = array_shift($bytes);
 
    # 0-------
    if ($first <= 0x7F) {
        return $first;
    }
    # 110----- 10------
    elseif ($first >= 0xC0 && $first <= 0xDF) {
        $tail = 1;
    }
    # 1110---- 10------ 10------
    elseif ($first >= 0xE0 && $first <= 0xEF) {
        $tail = 2;
    }
    # 11110--- 10------ 10------ 10------
    elseif ($first >= 0xF0 && $first <= 0xF7) {
        $tail = 3;
    }
    # 111110-- 10------ 10------ 10------ 10------
    elseif ($first >= 0xF8 && $first <= 0xFB) {
        $tail = 4;
    }
    # 1111110- 10------ 10------ 10------ 10------ 10------
    elseif ($first >= 0xFC && $first <= 0xFD) {
        $tail = 5;
    }
    else {
        throw new InvalidArgumentException("First byte is not valid");
    }
 
    if (count($bytes) < $tail) {
        throw new InvalidArgumentException("Corrupted character: $tail tail bytes required");
    }
    
    $code = ($first & (0x3F >> $tail)) << ($tail * 6);
    
    return $code;
 
    $code = ($first & (0x3F >> $tail)) << ($tail * 6);
 
    
 
    $tails = array_slice($bytes, 0, $tail);
    
    foreach ($tails as $i => $byte) {
        $code |= ($byte & 0x3F) << (($tail - 1 - $i) * 6);
    }
 
    return $code;
}



  /*foreach (
    array(0x21, 0x0410, 0x044B, 0x2116)
    as $code
  ) {
    $char = codeToUtf8($code);
    $back_code = utf8ToCode($char);
    
    
 
    printf(
        "%04x -> %s -> %04x (%s)"
        , $code
        , $char
        , $back_code
        , ($code === $back_code)
            ? "+ok"
            : "!fail"
    );
    echo PHP_EOL;
    }*/
      ?>
          
    </div>
  
  </body>
</html>

















        <?php
        /*
        function fullTrim($str) {                                                    
          return trim(preg_replace('/\s+/', '', $str));                                                   
        }
        
        function isPolindrom($str) {
          $text = fullTrim($str);
          $text = strtolowerUTF8($text);
          
          $reversed = strReversed($text);

          
          print ($text === $reversed) ? $str : searchPolindrom($text);

        }
        
        function strReversed($s) {
          preg_match_all('/./u', $s, $a);
          return implode('', array_reverse($a[0])); 
        }
        
        function strtolowerUTF8($text) {
          $text = mb_convert_case($text, MB_CASE_LOWER, "UTF-8");
          return $text;
        }
        
        function searchPolindrom($str) {
          
        
          return 'Ho-ho';  
        }
        
        print isPolindrom('Аргентина  манит   негра');*/
        ?> 



