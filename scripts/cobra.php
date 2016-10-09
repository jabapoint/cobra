#!/usr/local/bin/php
<?php

namespace Command;

function nline()
{
  print_r("\n");
}

$path = '/usr/lib/pear';
//set_include_path(get_include_path() . PATH_SEPARATOR . $path);

//exit;

//function print_r($str)
//{
//  print_r($str);
//  print_r("\n");
//}


if (PHP_SAPI != 'cli') {
//  exit('Script needs to run from Command Line Interface');
}

//print_r($_SERVER);
//
//exit;


function parseArgv($argv)
{
  foreach ($argv as $key=>$item) {
//    echo $key . ' = ';
//    print_r($item);
//    echo "\n---------------------------------\n";

    if ($item == 'controller') {
      commandController($item);
    }

    if ($item == 'about') {
      print_r("\x1b[1;37m   ____   ____   ____   ____   __\x1b[0m
  / ___\ / __ \ / __ \ / __ \ /  \
 / /    / / / // /_/ //   __// __ \
/ /___ / /_/ // /_/ //    \ /  __  \
\____/ \____/ \____/ \_/\_/ \_/  \_/
");
      nline();
      echo "\x1b[0;32mCobra\x1b[0m version \x1b[1;33m1.0.0\x1b[0m 2016-07-19 01:28:52";
      nline();
      nline();
    }

    if ($item == 'model') {
      echo "Введите <Имя_модели>: ";
      $model_name = trim(fgets(STDIN));
      $path_routes = 'config/routes.json';
      $json = file_get_contents($path_routes);
      $json_array = json_decode($json, true);
      $json_array[$model_name] = array('controller' => ucfirst($model_name), 'method' => 'indexAction');
      $json_new = json_encode($json_array, JSON_PRETTY_PRINT);
//      print_r($json_new);
//      print_r("\n");

//      if (file_exists()) {
//
//      }

      $fh = fopen($path_routes, 'w'); // Открываем файл в режиме записи

      if ($fh) {
        $ftext = fwrite($fh, $json_new);

        if (!$ftext) {
          echo "Ошибка при записи в файл: " . $path_routes;
        } else {
          print_r($delimiter);
          echo 'Файл изменен: ' . $path_routes;
          print_r($delimiter);
          print_r("Содержимое файла:");
          print_r("\n");
          print_r($json_new);
          print_r("\n");
        }
      } else {
        echo "Ошибка при открытии файла: " . $path_routes;
      }

      fclose($fh);
    }

  }
}

function commandController($line)
{
  echo "Введите <Имя_контроллера>: ";
  $controller_name = trim(fgets(STDIN));

  if ($controller_name == '') {
    return;

  }

  $path_routes = 'config/routes.json';
  $json = file_get_contents($path_routes);
  $json_array = json_decode($json, true);
  $json_array[$controller_name] = array('controller' => ucfirst($controller_name), 'method' => 'indexAction');
  $json_new = json_encode($json_array, JSON_PRETTY_PRINT);

  $fh = fopen($path_routes, 'w'); // Открываем файл в режиме записи

  if ($fh) {
    $ftext = fwrite($fh, $json_new);

    if (!$ftext) {
      echo "Ошибка при записи в файл: " . $path_routes;
    } else {
      print_r($delimiter);
      echo 'Файл изменен: ' . $path_routes;
      print_r($delimiter);
      print_r("Содержимое файла:");
      print_r("\n");
      print_r($json_new);
      print_r("\n");
    }
  } else {
    echo "Ошибка при открытии файла: " . $path_routes;
  }

  fclose($fh);

  $template_name = $controller_name;
  $content_zone = $template_name . '_content';
  $controller_name = ucfirst($controller_name) . 'Controller';
  $code_zone = 'try {
        Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(ROOT . \'/templates/E-Commerce\');
        $twig = new \Twig_Environment($loader);
        $template = $twig->loadTemplate(\'' . $template_name . '.tmpl\');
        $path = \'/templates/E-Commerce\';
        $color = \'orange.css\';
        $content = \'TEST CONTENT\';

        $h1 = \'Заголовок H1\';
        $h2 = \'Заголовок H2\';

        echo $template->render(array (
          \'h1\' => $h1,
          \'h2\' => $h2,
          \'path\' => $path,
          \'color\' => $color,
          \'' . $content_zone . '\' => $content
        ));

      } catch (Exception $e) {
        die (\'ERROR: \' . $e->getMessage());
      }';

  $controller = <<<CONTROLLER
<?php
  namespace App;

  use Core;
  use Twig_Autoloader;

  /**
   * Class $controller_name
   * @package App
   */
  class $controller_name extends \Core\Controller
  {
    /**
     * default method actionIndex()
     */
    public function indexAction()
    {
      $code_zone
    }
  }

CONTROLLER;

  $template = <<<TEMPLATE
  {% extends 'main.tmpl' %}

  {% block top_menu %}
  {% endblock %}

  {%  block slider %}
  {%  endblock %}

  {%  block product %}
  {%  endblock %}

  {% block twitter_block %}
  {% endblock %}

  {%  block content %}
  <div class="container">
        <div class="row">
            <div class="col-md-12 min-height-250">
                <h1 class="error-v3-title text-center margin-top-100">{{ h1 }}</h1>
                <h2 class="text-center margin-top-100">{{ h2 }}</h2>
                {{ $content_zone }}
            </div>
        </div>
    </div>
{%  endblock %}

{% block collection_banner %}
{% endblock %}

{%  block sponsors %}
{%  endblock %}

TEMPLATE;

  $delimiter = "\n------------------------------------------------\n";
  $ext = '.php';
  $file_path = 'src/controllers/';
  $fh = fopen($file_path . $controller_name . $ext, 'w'); // Открываем файл в режиме записи

  if ($fh) {
    $ftext = fwrite($fh, $controller);

    if (!$ftext) {
      echo "Ошибка при записи в файл.";
    } else {
      print_r($delimiter);
      echo 'Файл создан: ' . $file_path . $controller_name . $ext;
      print_r($delimiter);
      print_r("Содержимое файла:");
      print_r("\n");
      print_r($controller);
      print_r("\n");
    }
  } else {
    echo "Ошибка при открытии файла.";
  }

  fclose($fh);

  //

  $ext = '.tmpl';
  $file_path = 'templates/E-Commerce/';
  $fh = fopen($file_path . $template_name . $ext, 'w'); // Открываем файл в режиме записи

  if ($fh) {
    $ftext = fwrite($fh, $template);

    if (!$ftext) {
      echo "Ошибка при записи в файл.";
    } else {
      print_r($delimiter);
      echo 'Файл создан: ' . $file_path . $template_name . $ext;
      print_r($delimiter);
      print_r("Содержимое файла:");
      print_r("\n");
      print_r($template);
      print_r("\n");
    }
  } else {
    echo "Ошибка при открытии файла.";
  }

  fclose($fh);
}

parseArgv($argv);





























//  echo "Enter your <namespace>: ";
//  $namespace = trim(fgets(STDIN));
//  echo "Enter your operator <use>: ";
//  $use_operator = trim(fgets(STDIN));

//  if ($namespace != '') {
//    $namespace = 'namespace ' . $namespace;
//  }
//
//  if ($use_operator != '') {
//    $use_operator = 'use ' . $use_operator;
//  }

//while ($arg = array_shift($argv))
//{
//  print_r($arg);
//  echo "\n";
//}
//
//exit;

//function arguments2($argv) {
//  $_ARG = array();
//  foreach ($argv as $arg) {
//    if (ereg('--([^=]+)=(.*)',$arg,$reg)) {
//      $_ARG[$reg[1]] = $reg[2];
//    } elseif(ereg('^-([a-zA-Z0-9])',$arg,$reg)) {
//      $_ARG[$reg[1]] = 'true';
//    } else {
//      $_ARG['input'][]=$arg;
//    }
//  }
//  return $_ARG;
//}

//print_r(arguments($argv));

//function arguments ( $args )
//{
//  array_shift( $args );
//  $endofoptions = false;
//
//  $ret = array
//  (
//    'commands' => array(),
//    'options' => array(),
//    'flags'    => array(),
//    'arguments' => array(),
//  );
//
//  while ( $arg = array_shift($args) )
//  {
//
//    // if we have reached end of options,
//    //we cast all remaining argvs as arguments
//    if ($endofoptions)
//    {
//      $ret['arguments'][] = $arg;
//      continue;
//    }
//
//    // Is it a command? (prefixed with --)
//    if ( substr( $arg, 0, 2 ) === '--' )
//    {
//
//      // is it the end of options flag?
//      if (!isset ($arg[3]))
//      {
//        $endofoptions = true;; // end of options;
//        continue;
//      }
//
//      $value = "";
//      $com   = substr( $arg, 2 );
//
//      // is it the syntax '--option=argument'?
//      if (strpos($com,'='))
//        list($com,$value) = split("=",$com,2);
//
//      // is the option not followed by another option but by arguments
//      elseif (strpos($args[0],'-') !== 0)
//      {
//        while (strpos($args[0],'-') !== 0)
//          $value .= array_shift($args).' ';
//        $value = rtrim($value,' ');
//      }
//
//      $ret['options'][$com] = !empty($value) ? $value : true;
//      continue;
//
//    }
//
//    // Is it a flag or a serial of flags? (prefixed with -)
//    if ( substr( $arg, 0, 1 ) === '-' )
//    {
//      for ($i = 1; isset($arg[$i]) ; $i++)
//        $ret['flags'][] = $arg[$i];
//      continue;
//    }
//
//    // finally, it is not option, nor flag, nor argument
//    $ret['commands'][] = $arg;
//    continue;
//  }
//
//  if (!count($ret['options']) && !count($ret['flags']))
//  {
//    $ret['arguments'] = array_merge($ret['commands'], $ret['arguments']);
//    $ret['commands'] = array();
//  }
//  return $ret;
//}
//
//exit;


//if (isset($argv[1]) && ($argv[1] == 'controller')) {
//  echo "Enter your hostname: ";
//  $server_alias = trim(fgets(STDIN));
//
//
//  print_r($server_alias);
//}

//while (!$server_alias)
//{
//  echo "Enter your hostname: ";
//  $server_alias = trim(fgets(STDIN));
//}
