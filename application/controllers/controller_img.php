<?php
class Controller_img extends Controller { 

    function action_index() { 

        $this->view->generate('img_view.php', 'template_view.php'); 

    } 
}
?>