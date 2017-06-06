<?php

require_once dirname(__DIR__) . '/core/Controller.php';

class Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
//        $user->name = 'Alex';
        $user->name = $name;
//        echo $user->name;

        $this->view('home/index', ['name' => $user->name]);
    }
}