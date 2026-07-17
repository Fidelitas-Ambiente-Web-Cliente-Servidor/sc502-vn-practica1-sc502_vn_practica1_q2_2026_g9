<?php

require_once __DIR__ . '/../models/IndexModel.php';

class IndexController
{
    private IndexModel $model;

    public function __construct(PDO $connection)
    {
        $this->model = new IndexModel($connection);
    }

    public function index(): void
    {
        $cursosDestacados = $this->model->getAll();

        require __DIR__ . '/../views/index.php';
    }
}