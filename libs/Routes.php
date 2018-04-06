<?php

/**
 * Created by PhpStorm.
 * User: Stefa
 * Date: 19-3-2018
 * Time: 12:38
 */
class routes
{

    /**
     * @var array
     */
    public $routes = [];

    /**
     * routes constructor.
     */
    function __construct()
    {
        $route = $this;
        include 'routes/routes.php';
    }

    /**
     * @param string $url
     * @param string $controller
     * @param string $method
     */
    public function add(string $url, string $controller, string $method)
    {
        $url = trim($url, '/');
        $explodedUrl = explode('/', $url);
        $url = '/' . $url;

        if (!isset($this->routes[$url])) {
            $this->routes[$url] = [
                'url' => $url,
                'explodeUrl' => $explodedUrl,
                'controller' => $controller,
                'method' => $method
            ];
        } else {
            // #todo give error message!
        }
    }
}