<?php
  namespace App;

  use Core;
  use Twig_Autoloader;

  /**
   * Class CobraController
   * @package App
   */
  class CobraController extends Controller
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
        $template = $twig->loadTemplate('example.tmpl');
        $path = '/templates/E-Commerce';
        $color = 'orange.css';
        $content = 'TEST CONTENT';

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
