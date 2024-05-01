<?php

namespace src\controllers;

use src\models\Cursos;
use \core\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $data = new Cursos();

        $dados = $data->getAllCursos();
        $this->render('home', [
            'dados' => $dados
        ]);
    }
}
