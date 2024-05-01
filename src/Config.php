<?php
namespace src;

class Config {
    const BASE_DIR = '/novo-nem/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
<<<<<<< HEAD
    // const DB_DATABASE = 'grup5172_website';
    const DB_DATABASE = 'novo_nem';
    // const DB_USER = 'grup5172_nem';
    const DB_USER = 'root';
    // const DB_PASS = 'silva123';
=======
    const DB_DATABASE = 'test';
    CONST DB_USER = 'root';
>>>>>>> cf1a640e1348069ccd543629e7aef8c5807727b1
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
<<<<<<< HEAD


?>
=======
namespace src;

use \PDO;
class Database {
    public static function getConnection() {
        $dsn = Config::DB_DRIVER . ':host=' . Config::DB_HOST . ';dbname=' . Config::DB_DATABASE;
        $user = Config::DB_USER;
        $password = Config::DB_PASS;

        try {
            $connection = new PDO($dsn, $user, $password);
            // Configura o PDO para lançar exceções em caso de erro
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (\PDOException $e) {
            // Trate os erros de conexão aqui
            die('Erro de conexão: ' . $e->getMessage());
        }
    }
}
>>>>>>> cf1a640e1348069ccd543629e7aef8c5807727b1
