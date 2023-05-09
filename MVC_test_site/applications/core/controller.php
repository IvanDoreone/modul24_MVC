<?php
class Controller {
	public $model;
	public $view;
    public $title;
	
	function __construct()
	{
		$this->view = new View();
	}
    function action_index() {

    }
}