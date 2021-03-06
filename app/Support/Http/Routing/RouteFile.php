<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 29/09/2017
 * Time: 17:05
 */

namespace App\Support\Http\Routing;

use Illuminate\Routing\Router;

/**
 * Class RouteFile.
 */
abstract class RouteFile
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * @var array
     */
    protected $options;

    /**
     * RouteFile constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->router = app('router');
        $this->options = $options;
    }

    /**
     * Register Routes.
     */
    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    /**
     * Define routes.
     *
     * @return mixed
     */
    abstract public function routes();
}