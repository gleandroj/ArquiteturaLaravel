<?php

namespace App\Units\Auth\Routes;

use App\Support\Http\Routing\RouteFile;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 29/09/2017
 * Time: 17:04
 */
class Api extends RouteFile
{
    /**
     * Define routes.
     *
     * @return mixed
     */
    public function routes()
    {
        $this->router->get('teste', function(){
            return response()->json(['teste' => 'testado']);
        });
    }
}