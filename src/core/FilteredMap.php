<?php
  namespace Core;

  class FilteredMap {
    private $map;

    public function construct(array $baseMap) {
      $this->map = $baseMap;
    }

    public function has($name)
    {
      return isset($this->map[$name]);
    }

    public function get(string $name)
    {
      return $this->map[$name] ? $this->map[$name] : null;
    }
  }
