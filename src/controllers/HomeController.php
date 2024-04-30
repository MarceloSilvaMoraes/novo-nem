<?php
namespace src\controllers;
// namespace src\Config;
// namespace core\Database;
use \core\Controller;
use \core\Database;
// use \src\Config;

class HomeController extends Controller {

    public function index() {
        $connection = Database::getInstance();
        $statement = $connection->query('SELECT * FROM questoes');
        $users = $statement->fetchAll();
        //tabela questoes tem as colunas id, pergunta
        print_r($users);
        $this->render('home');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}