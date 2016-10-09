<?php
namespace App;

use Core;

class ProductController extends \Core\Controller
{
  public function get()
  {
    Core\Debug::_print(__CLASS__);
  }

  public function getAll()
  {

    \Twig_Autoloader::register();

    try {
      $loader = new \Twig_Loader_Filesystem(ROOT . '/templates/E-Commerce');
      $twig = new \Twig_Environment($loader);
      $template = $twig->loadTemplate('product.tmpl');
      $path = '/templates/E-Commerce';
      $color = 'orange.css';
      $content = 'TEST';

      echo $template->render(array (
        'path' => $path,
        'color' => $color,
        'content' => $content,
      ));

    } catch (Exception $e) {
      die ('ERROR: ' . $e->getMessage());
    }

  }
}