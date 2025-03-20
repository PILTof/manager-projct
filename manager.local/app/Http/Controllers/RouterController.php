<?php

namespace App\Http\Controllers;

use Route;


class RouterController extends Controller
{
    public function compose()
    {
        $routes = [];
        $routeCollection = Route::getRoutes();
        foreach ($routeCollection as $route) {
            /**
             * @var \Illuminate\Routing\Route
             */
            $route = $route;
            $name = $route->getName();
            if($name && !$route->hasParameters()) {
                
                $routes[$route->getName()] = $route->uri;
            }
        }
        
        return view('layout.main')->with(['routes' => $routes]);
    }
}
