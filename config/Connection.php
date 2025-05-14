<?php


namespace config;

require_once __DIR__ . '/../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Connection
{
    public static function connect()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '../../');
        $dotenv->load();
        $dotenv->required(
            ['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']
        );

        return new PDO(
            "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}",
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD']
        );
    }
}
