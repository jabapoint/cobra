<?php
  namespace App;

  use Core;
  use Twig_Autoloader;

  /**
   * Class LazyController
   * @package App
   */
  class LazyController extends \Core\Controller
  {
    /**
     * default method actionIndex()
     */
    public function indexAction()
    {
      try {
        Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(ROOT . '/templates/E-Commerce');
        $twig = new \Twig_Environment($loader);
        $template = $twig->loadTemplate('lazy.tmpl');
        $path = '/templates/E-Commerce';
        $color = 'orange.css';
        $content = 'TEST CONTENT';

        $h1 = 'Заголовок H1';
        $h2 = 'Заголовок H2';

        echo $template->render(array (
          'h1' => $h1,
          'h2' => $h2,
          'path' => $path,
          'color' => $color,
          'lazy_content' => $content
        ));

      } catch (Exception $e) {
        die ('ERROR: ' . $e->getMessage());
      }
    }
  }
