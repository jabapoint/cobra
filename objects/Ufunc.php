<?php
  namespace App;

  class Ufunc {
    public static function transliter($str) {
      $str = trim($str);

      if (strlen($str) == 0) {
        return false;
      }

      $alhpa =
        [
          'а'=>'a',
          'б'=>'b',
          'в'=>'v',
          'г'=>'g',
          'д'=>'d',
          'ж'=>'zh',
          'з'=>'z',
          'е'=>'e',
          'ё'=>'e',
          'и'=>'i',
          'й'=>'i',
          'к'=>'k',
          'л'=>'l',
          'м'=>'m',
          'н'=>'n',
          'о'=>'o',
          'п'=>'p',
          'р'=>'r',
          'с'=>'s',
          'т'=>'t',
          'у'=>'u',
          'х'=>'kh',
          'ф'=>'f',
          'ц'=>'tc',
          'ч'=>'ch',
          'ш'=>'sh',
          'щ'=>'shch',
          'ы'=>'y',
          'э'=>'e',
          'ю'=>'iu',
          'я'=>'ia',

          'А'=>'A',
          'Б'=>'B',
          'В'=>'V',
          'Г'=>'G',
          'Д'=>'D',
          'Ж'=>'ZH',
          'З'=>'Z',
          'Е'=>'E',
          'Ё'=>'E',
          'И'=>'I',
          'Й'=>'I',
          'К'=>'K',
          'Л'=>'L',
          'М'=>'M',
          'Н'=>'N',
          'О'=>'O',
          'П'=>'P',
          'Р'=>'R',
          'С'=>'S',
          'Т'=>'T',
          'У'=>'Y',
          'Х'=>'KH',
          'Ф'=>'F',
          'Ц'=>'TC',
          'Ч'=>'CH',
          'Ш'=>'SH',
          'Щ'=>'SHCH',
          'Ы'=>'Y',
          'Э'=>'E',
          'Ю'=>'IU',
          'Я'=>'IA',
          '_'=>'_',
          '0'=>'0',
          '1'=>'1',
          '2'=>'2',
          '3'=>'3',
          '4'=>'4',
          '5'=>'5',
          '6'=>'6',
          '7'=>'7',
          '8'=>'8',
          '9'=>'9',
          'a'=>'a',
          'b'=>'b',
          'c'=>'c',
          'd'=>'d',
          'e'=>'e',
          'f'=>'f',
          'g'=>'g',
          'h'=>'h',
          'i'=>'i',
          'j'=>'j',
          'k'=>'k',
          'l'=>'l',
          'm'=>'m',
          'n'=>'n',
          'o'=>'o',
          'p'=>'p',
          'q'=>'q',
          'r'=>'r',
          's'=>'s',
          't'=>'t',
          'u'=>'u',
          'v'=>'v',
          'w'=>'w',
          'x'=>'x',
          'y'=>'y',
          'z'=>'z',
          ' '=>'_',
          '-'=>'_',
          '*'=>'_',
          '/'=>'_',
          '+'=>'_',
          '='=>'_',
          '('=>'(',
          ')'=>')',
          '{'=>'{',
          '}'=>'}',
          '['=>'[',
          ']'=>']',
        ];

      $_str = $str;
      $arr = array();
      $str_len = mb_strlen($str);

      while($str_len) {
        $arr[] = mb_substr($_str, 0, 1, 'utf-8');
        $_str = mb_substr($_str, 1, $str_len, 'utf-8');
        $str_len = mb_strlen($_str);
      }

      $name = '';

      foreach ($arr as $k=>$v) {
        if ( array_key_exists($v, $alhpa) ) $name .= $alhpa[$v];
      }

      return $name;
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
    static function lowerUTF8($str) {
      return mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
    }
    
    static function lower($str) {
      self::lowerUTF8($str);
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
    static function isEqual($text, $text_reversed) {
      if ( empty($text) ) return false; 
      return ($text === $text_reversed) ? true : false;    
    }
    
    public static function convertDate($date, $separator='-') {
      $length = strlen($date);
      $error_date_format = 'error_date_format';
      
      if ($length == 10) {
        $date = str_replace('.', '-', $date);
        $date = str_replace('/', '-', $date);
        $date_array = explode('-', $date);

        if (is_array($date_array)) {
          if (count($date_array) != 3) {
            return $error_date_format . ' wrong format array';  
          }
          
          if ((strlen($date_array[0]) == 2) and (strlen($date_array[2]) == 4)) {
            if (strlen($date_array[1]) != 2) {
              //print_r(strlen($date_array[1]));
            
              return $error_date_format . ' wrong day';      
            }
            
            $date = $date_array[2] . $separator . $date_array[1] . $separator . $date_array[0];
            return $date;  
          }
          
          if ((strlen($date_array[0]) == 4) and (strlen($date_array[2]) == 2)) {
            $month = strlen($date_array[1]);
          
            $month = (int)$month;
          
            if ($month != 2) {
              return $error_date_format . ' wrong month';
            }
            
            $date = $date_array[2] . $separator . $date_array[1] . $separator . $date_array[0];
            return $date;  
          }
        } else {
          return $error_date_format . ' not array'; 
        }  
      } else {
        return $error_date_format . ' wrong length'; 
      }
    }
    
    public static function removeSpaces($data) {
      $data = trim($data);
      $data = str_replace(' ', '', $data);
      return $data;  
    }
    
    public static function addTriadSpaces($data, $point = ".") {
      $decimals = 2;
      $data = number_format($data, $decimals, $dec_point = $point, $thousands_sep = " ");
      return $data;		
  	}   
    
    public static function entireFractionalFormat($data) {
      $data_array = explode('.', $data);
      $count = count($data_array);
      
      if ($count == 1) {
        $data .= '.00';  
      }
      
      if ($count == 2) {
        $length = strlen($data_array[1]);
        
        if ($length == 1) {
          $data .= '0';
        }
        
        if ($length > 2) {
          $data_array[1] = substr($data_array[1], 0, 2);
          $data = $data_array[0].'.'.$data_array[1];
        }
      }
      
      return $data;            
    }
    
    public static function combineFormat($data) {
      $data = self::removeSpaces($data);
      $data = self::entireFractionalFormat($data);
      $data = self::addTriadSpaces($data);
      return $data;  
    }
    
    /**
    * Возвращает сумму прописью
    * @author runcore
    * @uses morph(...)
    */
    public static function num2str($num) {
      $nul='ноль';
      $ten=array(
        array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
        array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
      );
      
      $a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
      $tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
      $hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
      $unit=array( // Units
          array('копейка' ,'копейки' ,'копеек',	 1),
          array('рубль'   ,'рубля'   ,'рублей'    ,0),
          array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
          array('миллион' ,'миллиона','миллионов' ,0),
          array('миллиард','милиарда','миллиардов',0),
      );
  
      list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
      $out = array();
      if (intval($rub)>0) {
          foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
              if (!intval($v)) continue;
              $uk = sizeof($unit)-$uk-1; // unit key
              $gender = $unit[$uk][3];
              list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
              // mega-logic
              $out[] = $hundred[$i1]; # 1xx-9xx
              if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
              else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
              // units without rub & kop
              if ($uk>1) $out[]= self::morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
          } //foreach
      }
      else $out[] = $nul;
      $out[] = self::morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
      $out[] = $kop.' '.self::morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
      $result = trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
      
      $result_array = explode(' ', $result);
      $number_array = array('один'=>'Один', 'два'=>'Два', 'три'=>'Три', 'четыре'=>'Четыре', 'пять'=>'Пять', 'шесть'=>'Шесть', 'семь'=>'Семь', 'восемь'=>'Восемь', 'девять'=>'Девять', 'одна'=>'Одна', 'две'=>'Две', 'десять'=>'Десять', 'одиннадцать'=>'Одиннадцать', 'двенадцать'=>'Двенадцать', 'тринадцать'=>'Тринадцать', 'четырнадцать'=>'Четырнадцать', 'пятнадцать'=>'Пятнадцать', 'шестнадцать'=>'Шестнадцать', 'семнадцать'=>'Семнадцать', 'восемнадцать'=>'Восемнадцать', 'девятнадцать'=>'Девятнадцать','двадцать'=>'Двадцать', 'тридцать'=>'Тридцать', 'сорок'=>'Сорок', 'пятьдесят'=>'Пятьдесят', 'шестьдесят'=>'Шестьдесят', 'семьдесят'=>'Семьдесят', 'восемьдесят'=>'Восемьдесят', 'девяносто'=>'Девяносто','сто'=>'Сто', 'двести'=>'Двести', 'триста'=>'Триста', 'четыреста'=>'Четыреста', 'пятьсот'=>'Пятьсот', 'шестьсот'=>'Шестьсот', 'семьсот'=>'Семьсот', 'восемьсот'=>'Восемьсот', 'девятьсот'=>'Девятьсот');
      $index = $result_array[0];
      $result_array[0] = $number_array[$index];
      $result = implode(' ', $result_array);
      
      return $result;
    }
  
    /**
     * Склоняем словоформу
     * @ author runcore
     */
    public static function morph($n, $f1, $f2, $f5) {
        $n = abs(intval($n)) % 100;
        if ($n>10 && $n<20) return $f5;
        $n = $n % 10;
        if ($n>1 && $n<5) return $f2;
        if ($n==1) return $f1;
        return $f5;
    }
    
    public static function date2Words($created) {
      $created = explode(' ', $created);
      $created = $created[0];
      $created = explode('-', $created);
     
      $month_array = array();
      $month_array[1] = 'января';
      $month_array[2] = 'февраля';
      $month_array[3] = 'марта';
      $month_array[4] = 'апреля';
      $month_array[5] = 'мая';
      $month_array[6] = 'июня';
      $month_array[7] = 'июля';
      $month_array[8] = 'августа';
      $month_array[9] = 'сентября';
      $month_array[10] = 'октября';
      $month_array[11] = 'ноября';
      $month_array[12] = 'декабря';       
      $m = $created[1];       
      $m = (int)$m;
      $month = $month_array[$m]; 
      $created = $created[2].' '.$month.' '.$created[0].' г.';
      return $created;          
    }
  }