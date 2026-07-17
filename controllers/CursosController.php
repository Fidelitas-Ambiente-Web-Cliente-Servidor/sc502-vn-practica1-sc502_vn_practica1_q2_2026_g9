<?php
require_once __DIR__ . '/../models/CursoModel.php';

class CursosController
{
    private CursoModel $model;

    public function __construct(PDO $connection)
    {
        $this->model = new CursoModel($connection);
    }

   
    public function index(): void
    {
        $categoria = isset($_GET['categoria']) ? trim($_GET['categoria']) : 'todas';

        if ($categoria === '' || $categoria === 'todas') {
            $cursos    = $this->model->getAll();
            $categoria = 'todas';
        } else {
            $cursos = $this->model->getByCategory($categoria);
        }

        $categorias = $this->model->getCategorias();

        // La vista recibe: $cursos, $categorias, $categoria
        require __DIR__ . '/../views/cursos.php';
    }
}