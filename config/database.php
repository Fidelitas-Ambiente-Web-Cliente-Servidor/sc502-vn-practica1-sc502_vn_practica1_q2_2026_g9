<?php

class Database
{
    private static ?PDO $connection = null;

    private string $host = 'db';
    private string $database = 'appdb';
    private string $username = 'appuser';
    private string $password = 'apppass';

    private function __construct()
    {
    }

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            $config = new self();

            $dsn = "mysql:host={$config->host};"
                . "dbname={$config->database};"
                . "charset=utf8mb4";

            try {
                self::$connection = new PDO(
                    $dsn,
                    $config->username,
                    $config->password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch (PDOException $error) {
                die(
                    'Error de conexión a la base de datos: '
                    . htmlspecialchars($error->getMessage())
                );
            }
        }

        return self::$connection;
    }
}