<?php

declare(strict_types=1);

namespace App\controllers;
use App\view;

class registerController{

    public function index(){
        echo (new view('registerView'))->render();
    }
}