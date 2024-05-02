<?php

namespace src\controllers;

use src\models\Cursos;
use \core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = new Cursos();

        $idSemOnline = filter_input(INPUT_POST, "idSemOnline");
        $resposta = $data->cursos_cem_online($idSemOnline);
        echo json_encode($resposta);

        $dados = $data->cursos_semipresencial();

        $this->render('home', [
            'dados' => $dados
        ]);
    }
    public function action()
    {
        $data = new Cursos();

        $idSemOnline = filter_input(INPUT_POST, "idSemOnline");
        $resposta = $data->cursos_cem_online($idSemOnline);
        print_r($resposta);
    }
}
