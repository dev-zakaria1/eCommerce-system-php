<?php

namespace PRO\core;

class app
{
    public $type;
    public $controller;
    public $model;
    public $params;
    public function __construct()
    {
        $this->url();
        $this->render();
    }
    public function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/", $_SERVER['QUERY_STRING']);
            $this->type = $url[0];
            $this->controller = (!empty($url[1])) ? $url[1] . "Controller" : $url[0] . "Controller";
            $this->model = (!empty($url[2])) ? $url[2] : "index";
            unset($url[0], $url[1], $url[2]);
            $this->params = array_values($url);
        } else {
            $this->type = "home";
            $this->controller = "homeController";
            $this->model = "index";
            $this->params = [];
        }
    }
    public function render()
    {
        $controller = "PRO\controller\\" . $this->type . "\\" . $this->controller;
        if (class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller, $this->model)) {
                call_user_func_array([$controller, $this->model], $this->params);
            } else {
                echo "method not exist";
            }
        } else {
            echo "class not exist";
        }
    }
}
