<?php

namespace src\controllers;

use src\models\Cursos;
use \core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = new Cursos();

        // $idSemi = filter_input(INPUT_POST, "idSemi");
        $dados = $data->getAllCursos();
        // echo json_encode($dados);
        $this->render('home', [
            'dados' => $dados
        ]);
    }
    public function sem_online()
    {
        $data = new Cursos();

        $idSemOnline = filter_input(INPUT_POST, "idSemOnline");
        $resposta = $data->cursos_cem_online($idSemOnline);
        echo json_encode($resposta);
    }
    public function semi()
    {
        $data = new Cursos();

        $idSemOnline = filter_input(INPUT_POST, "idSemOnline");
        $resposta = $data->cursos_semi($idSemOnline);
        echo json_encode($resposta);
    }
}
