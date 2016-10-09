<?php
  class NovPDO {
    private $_db;
    private $_lastInsertId;
    private $_error = 'error_no';
    const host = 'db37.valuehost.ru';
    const dbname = 'italymania_snt';
    const user = 'italymania_snt';
    const pass = 'CilDCn6RjCevy2hLDYfb';
    
    public function __construct($params = array()) {
      if (!is_array($params)) {
        $this->setError('no_array');
        exit; 
      }
      
      //print_r($params);
      //exit;
    
      $count_array = count($params); 
      
      if ($count_array == 0) {
        try
        {
          $this->_db = new PDO('mysql:host='.self::host.';dbname='.self::dbname, self::user, self::pass);
          $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->_db->query('SET NAMES UTF8');
        }
        catch (PDOException $e) 
        {
          $this->setError("Connection failed: ".$e->getMessage());
        }  
      } 
      
      if ($count_array == 4) {
        try
        {
          $this->_db = new PDO('mysql:host='.$params['host'].';dbname='.$params['dbname'], $params['user'], $params['password']);
          $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->_db->query('SET NAMES UTF8');
        }
        catch (PDOException $e) 
        {
          $this->setError("Connection failed: ".$e->getMessage());
        }        
      }
      
      if (($count_array != 0) and ($count_array != 4)) {
        $this->setError('error_array_size');
      } 
    }
    
    public function getDB() {
      return $this->_db;  
    }
    
    public function getPDO() {
        try
        {
          $this->_db = new PDO('mysql:host='.self::host.';dbname='.self::dbname, self::user, self::pass);
          $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->_db->query('SET NAMES UTF8');
          return $this->_db;
        }
        catch (PDOException $e) 
        {
          $this->setError("Connection failed: ".$e->getMessage());
        }       
    }
    
    public function _query($sql) {
      try {
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->_db->prepare($sql);
    
        try {
          $this->_db->beginTransaction();
          $stmt->execute();
          $this->_db->commit();
          
          return $stmt;
        } catch(PDOExecption $e) {
          $this->_db->rollback();
          $this->setError("Error!: " . $e->getMessage() . "</br>");
        }
        
        return $stmt;
      } catch( PDOException $e ) {
          $this->setError("Error!: " . $e->getMessage() . "</br>");
      }    
    }

    public function _insert($sql, $data = array()) {
      $this->_lastInsertId = '';
      
      if (!is_array($data)) {
        $this->setError("error_array_data");
        return false;  
      }
    
      try {
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->_db->prepare($sql);
        
        try {
          $this->_db->beginTransaction();
          $stmt->execute($data);
          $this->_lastInsertId = $this->_db->lastInsertId();
          $this->_db->commit();
          
          return $this->_lastInsertId;
        } catch(PDOException $e) {
          $this->_db->rollback();
          $this->setError("Error!: " . $e->getMessage() . "</br>");
        }
        
        return $stmt;
      } catch( PDOException $e ) {
          $this->setError("Error!: " . $e->getMessage() . "</br>");
      }    
    }

    public function _update($sql) {
      try {
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->_db->prepare($sql);
        
        try {
          $this->_db->beginTransaction();
          $count = $this->_db->exec($sql);
          //$this->_lastInsertId = $db->lastInsertId();
          $this->_db->commit();
          
          return $count;
        } catch(PDOException $e) {
          $this->_db->rollback();
          $this->setError("Error!: " . $e->getMessage() . "</br>");
        }
        
        return $stmt;
      } catch( PDOException $e ) {
          $this->setError("Error!: " . $e->getMessage() . "</br>");
      }    
    }
        
    public function getError() {
      return $this->_error;  
    }
    
    public function setError($error) {
      $this->_error = $error;  
    }    
  }                                                                                  