<?php

namespace src\models;

use \core\Database;

class Cursos
{
    public function getAllCursos()
    {
        $connection = Database::getInstance();
        $statement = $connection->query("SELECT * FROM cursos_semipresencial");
        $cursos = $statement->fetchAll();
        return $cursos;
    }
    // public function cursos_semipresencial($idSemi)
    // {
    //     if ($idSemi) {
    //     $connection = Database::getInstance();
    //     $statement = $connection->prepare("SELECT * FROM cursos_semipresencial inner join cursos_cem_online on 
    //     cursos_semipresencial.id_modalidade02 = cursos_cem_online.id WHERE id = :id");
    //     $statement->bindValue(":id", $idSemi);
    //     $statement->execute();
    //     $cursos = $statement->fetch();
    //     return $cursos;
    //     }else{
    //         $connection = Database::getInstance();
    //         $statement = $connection->prepare("SELECT * FROM cursos_semipresencial inner join cursos_cem_online on 
    //         cursos_semipresencial.id_modalidade02 = cursos_cem_online.id");
    //         $statement->execute();
    //         $cursos = $statement->fetchAll();
    //         return $cursos;
    //     }
    // }
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
    public function cursos_semi($idSemOnline)
    {
        $connection = Database::getInstance();
        $statement = $connection->prepare("SELECT * FROM cursos_semipresencial WHERE id = :id");
        $statement->bindValue(":id", $idSemOnline);
        $statement->execute();
        $dados = $statement->fetch();
        return $dados;
    }
}
