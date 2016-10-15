<?php
    error_reporting(E_ALL);

    use Symfony\Component\Console\Application;

    require __DIR__ . '/vendor/autoload.php';

    $app = new Application();
    $app->run();

//namespace App;
//
//use Core;
//
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//
//define('ROOT', $_SERVER['DOCUMENT_ROOT']);
//define('SITE', 'http://store.mastersoftware.ru');
//define('APP', ROOT . '/app');
//
////  require_once  __DIR__ . '/vendor/autoload.php';
////
////  print_r($_SERVER['DOCUMENT_ROOT']);
////
////exit;
//
//$autoload_file = __DIR__ . '/vendor/autoload.php';
//
//if (file_exists($autoload_file)) {
//  require_once  $autoload_file;
//} else {
//  //
//}
//
//require_once ROOT. '/lib/Twig/Autoloader.php';
//
//$loader = new Core\Autoload();
//$loader->addNamespace('Core', ROOT . '/src/core', true);
//$loader->addNamespace('Core', ROOT . '/src/core/controllers', true);
//$loader->addNamespace('App', ROOT . '/src/controllers', true);
//$loader->register();
//
//$config = Core\Config::getInstance();
//$dbConfig = $config->get('db');
//
//$router = new Core\Router();
//$router->route(new Core\Request());
//
////
////  if (file_exists(ROOT . '/config/routes.json')) {
////    $json = file_get_contents(ROOT . '/config/routes.json');
////    $json_array = json_decode($json, true);
//////    print_r($json_array);
////  } else {
////    print_r('FILE_NOT_FOUND');
////  }


