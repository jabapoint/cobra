<?php
namespace App;

use Core;
use Twig_Autoloader;

/**
 * Class ContactsController
 * @package App
 */
class ContactsController extends \Core\Controller
{
  /**
   * default method actionIndex()
   */
  public function actionIndex()
  {
    try {
    Twig_Autoloader::register();
      $loader = new \Twig_Loader_Filesystem(ROOT . '/templates/E-Commerce');
      $twig = new \Twig_Environment($loader);
      $template = $twig->loadTemplate('contacts.tmpl');
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