<?php
  namespace Core;

  class View
  {
    private $_dir_tmpl;
    private $_block = array();

    /**
     * View constructor.
     * @param $dir_tmpl
     */
    public function __construct($dir_tmpl)
    {
      $this->_dir_tmpl = $dir_tmpl;
    }

    /**
     * @param $dir_tmpl
     */
    public function changeDirTmpl($dir_tmpl) {
      $this->_dir_tmpl = $dir_tmpl;
    }

    /**
     * @param $file
     * @param $params
     * @param $name
     * @param string $file_ext
     */
    public function assign($file_name, $params, $block_name, $file_ext = '.php')
    {
      $this->_dir_tmpl.$file_name;
      $this->_block[$block_name] = $this->render($file_name, $params, true, $file_ext);
    }

    public function assignContent($dir_tmpl, $file_name, $params, $block_name, $file_ext = '.php')
    {
      $this->changeDirTmpl($dir_tmpl);
      $this->assign($file_name, $params, $block_name, $file_ext);
    }

    public function render($file, $params, $return = false, $file_ext = '.php')
    {
      $template = $this->_dir_tmpl . $file . $file_ext;

      print_r($template);
      exit;

      if (count($this->_block) > 0) {
        //debug::_($this->_block, 1);
        $params = array_merge($params, $this->_block);
      }

      extract($params);

//      debug::_($params, 1);
//      debug::_($data_option_category, 1);

      ob_start();
      include($template);

      if ($return)
        return ob_get_clean();
      else
        echo ob_get_clean();
    }
  }