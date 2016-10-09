<?php
  namespace App;

  use Core;

  class ErrorController extends \Core\Controller
  {
    public function notFound()
    {
      require_once ROOT. '/lib/twig/Autoloader.php';
      \Twig_Autoloader::register();

      try {
        $loader = new \Twig_Loader_Filesystem(ROOT . '/templates/E-Commerce');
        $twig = new \Twig_Environment($loader);
        $template = $twig->loadTemplate('404.tmpl');

        $data= array('text' => 'first', 'text2' => 'second');

      //  return $this->render('SomeBundle:Default:index.html.twig', array('data' => $data));

        // генерируем случайное число
        // и проверяем его на чётность
        $num = rand (0,30);
        $div = ($num % 2);
        $zzzzz = array(array('user' => '111'), array('user' => '222'));

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