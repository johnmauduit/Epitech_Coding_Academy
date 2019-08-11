<?php

namespace Controllers;

use Twig;

use Helpers\Singleton;

abstract class Controller
{
    use Singleton;

    public function __construct() {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../views/');
        $this->twig = new \Twig_Environment($loader, []);
    } 

    public function test() {
        var_dump('test');
    }

    protected function render($template, array $vars) {
        $tpl = $this->twig->load($template);

        echo $tpl->render($vars);
    }
}