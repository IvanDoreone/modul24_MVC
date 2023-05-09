<?php
class Controller_Contacts extends Controller { 

    function __construct()
	{
		$this->view = new View();
        $this->model = new Contacts_Model();

	}
function action_index() { 
$data = $this->model->get_data();
$this->view->generate('contacts_view.php', 'template_view.php', $data); 

} 
}

?>