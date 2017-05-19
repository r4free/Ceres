<?php
/**
 * Created by PhpStorm.
 * User: Rafa
 * Date: 18/05/2017
 * Time: 12:44
 */

namespace Ceres;
use Ceres\Helpers;

class Route
{

    public $config;


    public function __construct($config)
    {
        $this->config = $config;
        $this->run();
    }


    public function getUrl()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }

    private function run()
    {
        include_once "../" . $this->config['second_routes'];


    }

    private function initController()
    {

        $args = func_get_args();
        $ct = $this->pathToNamespace() . $args[0];
        $controller = new $ct;
        $controller->$args[1]($args[2]);

    }

    private function pathToNamespace()
    {
        return str_replace('/', "\\", $this->config['controllers']);
    }

    public function post($route, $param)
    {
        echo "ainda funciona";
    }

    public function get($route, $ca)
    {

        $url_array = explode("/", $this->getUrl());
        $route_array = explode("/", $route);
        /*para urls com parametros | for url with param*/

       $h->

        if (count($route_array) == count($url_array)) {

            for ($i = 0; $i < count($route_array); $i++) {

                if (strpos($route_array[$i], '{') !== false) {
                    $route_array[$i] = $url_array[$i];
                    $param[] = $url_array[$i];
                }

            }
            $controller = explode('@', $ca)[0];
            $action = explode('@', $ca)[1];
            if (isset($param) && count($param) <= 1) {
                $this->initController($controller, $action, $param[0]);
            } elseif (!isset($param)) {
                $this->initController($controller, $action, null);
            } else {
                $this->initController($controller, $action, $param);

            }

        } else {
            /*retorna mensagem de q os parametros nao conferem*/
        }

    }


}