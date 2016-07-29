<?php

class Controller {
    public function model($model)
    {
        //$model=User
        require_once "../ProjectMVC/models/$model.php";
        return new $model ();
    }
    
    public function view($view, $data) 
    {
        //$view="Home/hello";
        require_once "../ProjectMVC/views/$view.php";
        //../EasyMVC/views/Home/hello.php
    }
    public function js($js) {
     echo "<script src=/ProjectMVC/js/$js.js></script>";
    }
}

?>
