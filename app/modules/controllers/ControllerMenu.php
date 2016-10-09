<?php
  namespace App;
        
  class ControllerMenu extends Controller {
    public $data;
    private $_db;
    private $_init;
  
    public function __construct() {
      //$this->_db = DB::getPDO(Config::getConnection());
    }
    
    public function action() {
      //debug::_(__CLASS__);
      $model = new ModelMenu();       
      $navbar = $model->getMenu();
      
      //debug::_($navbar);
      
      $this->view = new Viewing(_ROOT . '/application/widgets/views/');
      $templateName = 'ViewWidgetMenu';


      $params = ['navbar'=>$navbar]; 
      return $this->view->render($templateName, $params, true);
    }
  }