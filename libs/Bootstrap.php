<?php

class Bootstrap
{

    /**
     * Bootstrap constructor.
     */
    function __construct()
    {
//        $url = trim($_GET['url'] ?? '/', '/');
        echo phpversion();
        die();
        $explodedUrl = explode('/', $url);
        $url = '/' . $url;

        $totalToBeChecked = count($explodedUrl);
        $route = new Routes();
        foreach ($route->routes as $route) {
            $checked = 0;
            $ids = [];
            foreach ($route['explodeUrl'] as $key => $explodeUrlPart) {
                if (isset($explodedUrl[$key]) && (
                        $explodeUrlPart == $explodedUrl[$key] ||
                        (
                            is_numeric($explodedUrl[$key]) &&
                            preg_match('/^{+.*}$/', trim($explodeUrlPart))
                        )
                    )
                ) {
                    if (is_numeric($explodedUrl[$key])) {
                        $ids[] = $explodedUrl[$key];
                    }
                    $checked = $checked + 1;
                    if ($totalToBeChecked == $checked && count($route['explodeUrl']) == $totalToBeChecked) {
                        $this->loadPage($route, $ids);
                        break;
                    }
                } else {
                    continue; //start loop again
                }
            }
        }
    }

    /**
     * @param array $params
     * @param array $ids
     */
    private function loadPage(array $params, array $ids = [])
    {
        require 'libs/Controller.php';
        require 'libs/Model.php';
        require 'controllers/' . $params['controller'] . '.php';
        $controller = new $params['controller'];
        $method = $params['method'];
        $controller->$method();
    }
}