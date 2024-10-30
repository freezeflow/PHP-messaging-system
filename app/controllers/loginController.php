<?php
declare(strict_types=1);

namespace App\controllers;

use App\view;

class loginController{
    
    public function index(): string{
        return View::make('loginView', ['name'=>'Floriaan'])->render();
    }
}
