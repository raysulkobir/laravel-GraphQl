<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Shop extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shop';
    }

    public static function call($controllerMethod, $args)
    {
        $shopInstance = app('shop'); // Resolve the instance of your Shop class

        if (!is_array($args)) {
            return [];
        }

        if (!empty($args) && is_array($args)) {
            $shopInstance->request->request->add($args);
        }

        return app()->call(config('shop.controllers') . $controllerMethod);
    }
}
