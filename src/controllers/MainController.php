<?php
  namespace App;

  use Core;
  use Twig_Autoloader;

  /**
   * Class MainController
   * @package App
   */
  class MainController extends \Core\Controller
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
        $example_content = 'TEST';
        $h1 = 'Заголовок <H1>';
        $h2 = 'Заголовок <H2>';
        $content = 'CONTENT';

        echo $template->render(array (
          'h1' => $h1,
          'h2' => $h2,
          'path' => $path,
          'color' => $color,
          'example_content' => $example_content,
          'content' => $content,
        ));

      } catch (Exception $e) {
        die ('ERROR: ' . $e->getMessage());
      }
    }
  }
