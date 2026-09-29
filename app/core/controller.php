<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }
}