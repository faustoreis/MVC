<?php

require 'View.php';
require 'Model.php';

class Controller
{
    public function index()
    {
        $model = new Model();
        $view = new View();
        $dataId = $model->getId();
        $dataNome = $model->getNome();
        $view->render($dataId, $dataNome);
    }
}
