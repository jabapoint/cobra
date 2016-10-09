<?php
  namespace Core;

	abstract class Controller {
  	public $model;
  	public $view;
  
  	function __construct() {
//      $this -> model = new Model();
//  		$this -> view = new View();
  	}
  
  	function actionIndex() {

  	}
  }