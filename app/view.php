<?php

namespace App;

class view{
    
    public function __construct(
        protected string $view,
        protected array $params = []
    ){
    }

    public function render(){
        ob_start();

        include VIEW_PATH . $this->view . '.php';

        return ob_get_clean();
    }
}