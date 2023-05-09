<?php
class Controller_Phpinfo extends Controller { 
function action_index() { 
$this->view->generate('phpinfo_view.php', 'template_view.php'); 
} 
}

?>