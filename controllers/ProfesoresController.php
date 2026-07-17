<?php

require_once __DIR__ . '/../models/ProfesoresModel.php';

class ProfesoresController
{
    private ProfesoresModel $model;

    public function __construct(PDO $connection)
    {
        $this->model = new ProfesoresModel($connection);
    }

    public function index(): void
    {
        $profesores = $this->model->getAll();

        require __DIR__ . '/../views/profesores.php';
    }

    public function show(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id) {
            http_response_code(400);
            exit('El ID del profesor no es válido.');
        }

        $profesor = $this->model->getById($id);

        if (!$profesor) {
            http_response_code(404);
            exit('Profesor no encontrado.');
        }

        require __DIR__ . '/../views/profesor_detalle.php';
    }
}