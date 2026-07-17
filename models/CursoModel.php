<?php

class CursoModel
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   
    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM cursos ORDER BY nombre ASC");
        return $stmt->fetchAll();
    }

   
    public function getByCategory(string $categoria): array
    {
        $stmt = $this->pdo->prepare(
            "SELECT * FROM cursos WHERE categoria = :categoria ORDER BY nombre ASC"
        );
        $stmt->execute([':categoria' => $categoria]);
        return $stmt->fetchAll();
    }

    
    public function getCategorias(): array
    {
        $stmt = $this->pdo->query("SELECT DISTINCT categoria FROM cursos ORDER BY categoria ASC");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}