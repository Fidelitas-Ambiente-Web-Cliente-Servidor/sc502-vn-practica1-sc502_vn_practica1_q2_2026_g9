<?php

class IndexModel
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getAll(): array
    {
        $sql = "
            SELECT id, nombre, descripcion, categoria
            FROM cursos_destacados
            ORDER BY id ASC
        ";

        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}