<?php
class Controller_Phpgd extends Controller { 
function action_index() { 
$this->view->generate('phpgd_view.php', 'template_view.php'); 
} 
}

?>