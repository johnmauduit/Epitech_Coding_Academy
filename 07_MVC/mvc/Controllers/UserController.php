<?php

namespace Controllers;

class UserController extends Controller
{
    public function index() {
        $this->render(
            'index.html', 
            [
                'title' => 'Titre de ma page', 
                'users' => [
                    ['name' => 'Fabien'], 
                    ['name' => 'Foo']
                ]
            ]
        );
    }
}