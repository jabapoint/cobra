<?php
  class AuxNov {
    public static function convertDate($date, $separator='-') {
      $length = strlen($date);
      $error_date_format = 'error_date_format';
      
      if ($length == 10) {
        $date = str_replace('.', '-', $date);
        $date = str_replace('/', '-', $date);
        $date_array = explode('-', $date);

        if (is_array($date_array)) {
          if (count($date_array) != 3) {
            return $error_date_format.' not_array';
          }
          
          if ((strlen($date_array[0]) == 2) and (strlen($date_array[2]) == 4)) {
            if (strlen($date_array[1] != 2)) {
               return $error_date_format;
            }
            
            $date = $date_array[2].$separator.$date_array[1].$separator.$date_array[0];
            return $date;  
          }
          
          if ((strlen($date_array[0]) == 4) and (strlen($date_array[2]) == 2)) {
            $month = strlen($date_array[1]);          
            $month = (int)$month;

            if ($month != 2) {
              return $error_date_format;
            }
            
            $date = $date_array[2].$separator.$date_array[1].$separator.$date_array[0];
            return $date;  
          }
        } else {
           return $error_date_format;  
        }  
      } else {
        return $error_date_format; 
      }
    }
    
    public static function removeSpaces($data) {
      $data = trim($data);
      $data = str_replace(' ', '', $data);
      return $data;  
    }
  	
    public static function dataFormat($data, $point = ".") {
      $decimals = 2;
      $data = number_format($data, $decimals, $dec_point = $point, $thousands_sep = " ");
      return $data;		
  	}
    
    public static function addTriadSpaces($data, $point = ".") {
      $decimals = 2;
      $data = number_format($data, $decimals, $dec_point = $point, $thousands_sep = " ");
      return $data;		
  	}
    
    public static function dataSpanFormat($data) {
      $decimals = 2;
      $data = number_format($data, $decimals, $dec_point = ".", $thousands_sep = " ");
      $data .= '<span class="jbcurrency-value"><strong>'.$data.'</strong></span>';
      $data .= '<span class="jbcurrency-symbol"><i class="ruble icon"></i></span></span>';  
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
    
    public static function date2Words($created, $sep='-') {
      $created = explode(' ', $created);
      $created = $created[0];
      $created = explode($sep, $created);
     
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
    
    public static function month2str($m) {  
      $month_array = array();
      $month_array[01] = 'январь';
      $month_array[02] = 'февраль';
      $month_array[03] = 'марть';
      $month_array[04] = 'апрель';
      $month_array[05] = 'май';
      $month_array[06] = 'июнь';
      $month_array[07] = 'июль';
      $month_array[08] = 'августь';
      $month_array[09] = 'сентябрь';
      $month_array[10] = 'октябрь';
      $month_array[11] = 'ноябрь';
      $month_array[12] = 'декабрь';             
      $month = $month_array[$m]; 
      return $month;          
    }
  }