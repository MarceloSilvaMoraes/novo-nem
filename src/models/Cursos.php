<?php

namespace src\models;

use \core\Database;

class Cursos
{
    public function getAllCursos()
    {
        $connection = Database::getInstance();
        $statement = $connection->query("SELECT * FROM cursos_semipresencial inner join cursos_cem_online on 
        cursos_semipresencial.id_modalidade02 = cursos_cem_online.id");
        $cursos = $statement->fetchAll();
        return $cursos;
    }
    public function cursos_cem_online($idSemOnline)
    {
        if ($idSemOnline) {
            $connection = Database::getInstance();
            $statement = $connection->prepare("SELECT * FROM cursos_cem_online WHERE id = :id");
            $statement->bindValue(":id", $idSemOnline);
            $statement->execute();
            $dados = $statement->fetch();
            return $dados;
        }
    }
    public function cursos_semi($idSemi)
    {
        $connection = Database::getInstance();
        $statement = $connection->prepare("SELECT * FROM cursos_semipresencial WHERE id = :id");
        $statement->bindValue(":id", $idSemi);
        $statement->execute();
        $dados = $statement->fetch();
        return $dados;
    }
}
