<?php

declare(strict_types=1);

namespace App\router;
use App\exceptions\RouteNotFound;

class router{

    private array $routes;

    public function register(string $route, callable|array $action): static{
        $this->routes[$route] = $action;

        return $this;
    }

    public function resolve(string $requestUri): mixed{
        $route = $requestUri;
        $action = $this->routes[$route] ?? null;

        if(is_callable($action)){
            return call_user_func($action);
        }

        if(!$action){
            throw new RouteNotFound();
        }

        if(is_array($action)){
            [$class, $method] = $action;

            if(class_exists($class)){
                $class = new $class();

                if(method_exists($class, $method)){
                    return call_user_func_array([$class, $method],[]);
                }
            }
        }
    }
}

