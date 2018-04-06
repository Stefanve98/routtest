<?php

if (! function_exists('redirect')) {
    /**
     * @param string $url
     */
    function redirect(string $url) {
        header('Location: ' . $url);
    }
}

if (! function_exists('view')) {

    /**
     * @param string|null $view
     * @param array $params
     * @return string
     */
    function view(string $view = null, $params = []) {
        ob_start();
            include('views/' . $view . '.php');
            $output = ob_get_contents();
        ob_end_clean();

        echo $output;
    }
}