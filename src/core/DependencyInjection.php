<?php
  namespace App;

  use Core;

  class DependencyInjector
  {
    private $_dependencies = [];

    public function set($name, $object) {
      $this->_dependencies[$name] = $object;

    }

    public function get($name) {
      if (isset($this->_dependencies[$name])) {
        return $this->_dependencies[$name];
      }

      throw new NotFoundException($name . ' dependency not found.');
    }
  }
