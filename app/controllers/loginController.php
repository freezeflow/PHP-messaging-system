<?php
declare(strict_types=1);

namespace App\controllers;

use App\view;

class loginController{
    
    public function index(): void{
        echo (new View('loginView'))->render();
    }
}