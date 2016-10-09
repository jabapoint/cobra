<?
  
  class Init {
    private $_host;
    private $_dbname;
    private $_user;
    private $_password;
    private $_prefix;
    private $_salt;
  
    public function __construct($config) {
      $this->_host = $config['database']['connections']['mysql']['host'];
      $this->_dbname = $config['database']['connections']['mysql']['dbname'];
      $this->_user = $config['database']['connections']['mysql']['user'];
      $this->_password = $config['database']['connections']['mysql']['password'];
      $this->_prefix = $config['database']['connections']['mysql']['prefix'];
      $this->_salt = $config['app']['salt'];   
    }
    
    public function get($name=NULL) {
      switch ($name) {
        case 'host': return $this->_host; break;
        case 'dbname': return $this->_dbname; break;
        case 'user': return $this->_user; break;
        case 'password': return $this->_password; break;
        case 'prefix': return $this->_prefix; break;
        case 'salt': return $this->_salt; break;
        default: return false;
      } 
    }
    
    public function getParams() {
      $connections = 
      [
        'host'=>$this->_host,
        'dbname'=>$this->_dbname,
        'user'=>$this->_user,
        'password'=>$this->_password 
      ];
      
      return $connections;
    }
  
    public function setRegistry($db) {
      $request = new Request();
      $registry = Registry::getInstance();
      $registry->set('db', $db);
      $registry->set('request', $request);
      $prefix = $this->get('prefix');
      $registry->set('prefix', $prefix);
      $registry->set('salt', $this->_salt);
    }
  }