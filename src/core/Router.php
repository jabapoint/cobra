<?php
  namespace Core;

  use App\ErrorController;
  use App;
//  use Object\Init;

  class Router {
    private $_routeMap;
    private static $regexPatters = [
      'number' => '\d+',
      'string' => '\w'
    ];

    public function  __construct()
    {
      $json = file_get_contents(ROOT . '/config/routes.json');
      $this->_routeMap = json_decode($json, true);
    }

    public function route($request)
    {
      $path = $request->getPath();

      if (count($this->_routeMap) > 0) {
        foreach ($this->_routeMap as $route => $info) {
          $regexRoute = $this->getRegexRoute($route, $info);

//          Debug::_print($route)->_print($path)->_print($info)->_print($request)->_exit();

          if (preg_match("@^/$regexRoute$@", $path)) {
            return $this->executeController($route, $path, $info, $request);
          }
        }
      }

      $errorController = new ErrorController($request);
      return $errorController->notFound();
    }

    private function extractParams(
      $route,
      $path
    ){
      $params = [];

      $pathParts = explode('/', $path);
      $routeParts = explode('/', $route);

      foreach ($routeParts as $key => $routePart) {
        if (strpos($routePart, ':') === 0) {
          $name = substr($routePart, 1);
          $params[$name] = $pathParts[$key+1];
        }
      }

      return $params;
    }


    private function executeController(
      $route,
      $path,
      array $info,
      Request $request
    ){
      $controllerName = $info['controller'] . 'Controller';

//      Debug::_print($controllerName)->_exit();

      $controller = '\\App\\' . $controllerName;
      $method = $info['method'];

      $controller = new $controller();

      $params = $this->extractParams($route, $path);
      return call_user_func_array([$controller, $info['method']], $params);

//      $controller->$method();

//      Debug::_print($info['method']);
//
//      Debug::_print($controller)->_exit();

//      if (isset($info['login']) && $info['login']) { if ($request->getCookies()->has('user')) {
//        $customerId = $request->getCookies()->get('user');
//        $controller->setCustomerId($customerId);
//      } else {
//        $errorController = new CustomerController($request);
//        return $errorController->login();
//      }
//    }

//      $params = $this->extractParams($route, $path); return call_user_func_array(
//        [$controller, $info['method']], $params
//      );
    }

    private function getRegexRoute(
      $route,
      array $info
    ) {
      if (isset($info['params'])) {
        foreach ($info['params'] as $name => $type) {
          $route = str_replace(
            ':' . $name, self::$regexPatters[$type], $route
          );
        }
      }

      return $route;
    }

  }
