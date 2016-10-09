<?php
namespace App;

use Core;

class XXXController extends \Core\Controller
{
  public function actionIndex()
  {
    Core\Debug::_print(__FILE__);

//
    try {
//    \Twig_Autoloader::register();
//      $loader = new \Twig_Loader_Filesystem(ROOT . '/templates/E-Commerce');
//      $twig = new \Twig_Environment($loader);
//      $template = $twig->loadTemplate('product.tmpl');
//      $path = '/templates/E-Commerce';
//      $color = 'orange.css';
//      $content = 'TEST';
//
//      echo $template->render(array (
//        'path' => $path,
//        'color' => $color,
//        'content' => $content,
//      ));

    } catch (Exception $e) {
      die ('ERROR: ' . $e->getMessage());
    }
  }
}