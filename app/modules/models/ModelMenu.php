<?php
  namespace App;
 
  class ModelMenu_ {
    private $_db = null;
    private $_init = null; 
    
    public function __construct() {
      $this->_db = DB::getPDO(Config::getConnection());  
    }

    /* unique identifier */
    public function getId() {
        return 'widget.menu';
    }

    /* name displayed in admin area */
    public function getName() {
        return 'Hello, modelWidgetMenu!';
    }
    
    /* Запрос для получения данных */
    public function getMenu() {
        $prefix = Config::prefix();
        
        //debug::_($prefix);
                
        $sql    = "
          SELECT 
            id, parent_id, menu, priority, title, slug roles 
          FROM 
            {$prefix}_system_node 
          WHERE 
            status  = 1 AND
            parent_id = 0
          ORDER BY 
            priority
        ";
    
        try {
          $stmt = $this->_db->prepare($sql);
          $stmt->execute();

        } catch(Exception $e) {
          return 'Message: ' .$e->getMessage();
        }
        
        $class = '';
        $data  = '';
        
        while ($row = $stmt->fetch(\PDO::FETCH_LAZY)) {
          $id        = $row->id;
          $url       = $row->url;
          $name      = $row->name;
          $parent_id = $row->parent_id;
          
          if ($url == '/') {
            $class = 'class="active-new"';
          } else {
            $class = 'class=""';  
          }
           
          $sql    = "
            SELECT 
              id, parent_id, menu, priority, title, slug roles 
            FROM 
              {$prefix}_system_node 
            WHERE 
              status  = 1 AND
              parent_id = '$id'
            ORDER BY 
              priority
          ";
          
          try {
            $stmt_ = $this->_db->prepare($sql);
            $stmt_->execute();

          } catch(Exception $e) {
            return 'Message: ' .$e->getMessage();
          }
          
          $row_count = $stmt_->rowCount();
          
          if ($row_count == 0) {
            $data .= "<li $class>";
            $data .= "<a href='$url'>$name</a>"; 
            $data .= "</li>";             
          } else {
            $class = "dropdown " . $class;
            $data .= "<li $class>";
            $data .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $name . '<span class="caret"></span></a>';                            
            $data .= '<ul class="dropdown-menu">';
            
            while ($row_ = $stmt_->fetch(\PDO::FETCH_LAZY)) {
              $url_   = $row_->url;
              $name_  = $row_->name;                
              $data .= '<li><a href="' . $url_ . '">' . $name_ . '</a></li>';

            }
            
            $data .= "</ul>";
            $data .= "</li>";               
          }

          $class = '';
        }
        
        return $data;                       
    }

    /* Rendering the widget. Will usually render a view */
    public function render(WidgetInterface $widget, $options = []) {
        return $this['view']->render('extension://hello/views/widget.razr');
    }

    /* Define a form for the Advanced section in the widget admin settings */
    public function renderForm(WidgetInterface $widget) {
        return 'Hello Widget Form';
    }
  }

  /*namespace Pagekit\Hello;  
  use Pagekit\Widget\Model\Type;
  use Pagekit\Widget\Model\WidgetInterface;*/