<?php
namespace src;

class Config {
    const BASE_DIR = '/novo-nem/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'test';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
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
