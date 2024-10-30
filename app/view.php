<?php

namespace App;

use App\exceptions\ViewNotFound;

class view{
    
    public function __construct(
        protected string $view,
        protected array $params = []
    ){
    }

    public static function make(string $view, array $params = []): static{
        return new static ($view, $params);
    }

    public function render(): bool|string{
        $view = VIEW_PATH . $this->view . '.php';

        if(!file_exists($view)){
            throw new ViewNotFound();
        }

        ob_start();

        include VIEW_PATH . $this->view . '.php';

        return ob_get_clean();
    }
}