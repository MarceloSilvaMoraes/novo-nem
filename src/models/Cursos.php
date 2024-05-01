<?php
namespace src\models;

use \core\Database;

class Cursos  {
    public function getAllCursos() {
    $connection = Database::getInstance();
    $statement = $connection->query("SELECT * FROM cursos");
    $cursos = $statement->fetchAll();
    return $cursos;

    }
}
