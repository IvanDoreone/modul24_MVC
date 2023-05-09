<?php
class Controller_Servises extends Controller { 
public $title;
    function __construct()
	{
		$this->view = new View();
        $this->model = new Servises_Model();

	}
function action_index() { 
$data = $this->model->get_data();
$this->view->generate('servises_view.php', 'template_view.php', $data); 
$title = 'servises';
} 
}

?>