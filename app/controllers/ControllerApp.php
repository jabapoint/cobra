<?php
  namespace App;

  use Core\Controller;
  use Object\Config;
  use Object\Init;


  class ControllerApp extends Controller
  {
    function action_index()
    {
      $model_name = str_replace('Controller', 'Model', __CLASS__);
      $model = Init::initClass($model_name);
      $view_name = str_replace('Controller', 'View', __CLASS__);
      $default_view_app = _ROOT . Config::get('default_view_dir_app');
      $view = Init::initClass($view_name, $default_view_app);
      print_r($view);

      $h1 = 'Редактирование товаров и цен';
      $title = 'Товары';
      $content = 'CONTENT'; // включаем контент напрямую (переменная шаблона $content), указав в качестве ключа массива $params слово content, а качестве значения элемента массива $params - переменную $content
      $params = ['title' => $title, 'h1' => $h1, 'menu_params' => 'menu_params', 'content'=>'test'];
//      $view->changeDirTmpl($default_view_dir_admin);
//      $file_name = 'ViewAdmin';
      $view->render('index', $params, false);
    }
  }