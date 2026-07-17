<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $titulo ?? 'Academia Ficticia' ?></title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <nav class="navbar">
    <div class="logo">A.F</div>

    <ul>
      <li>
        <a
          class="active"
          href="index.php?controller=index&action=index"
        >
          Inicio
        </a>
      </li>

      <li>
        <a href="index.php?controller=cursos&action=index">
          Cursos
        </a>
      </li>

      <li>
        <a href="index.php?controller=profesores&action=index">
          Profesores
        </a>
      </li>
    </ul>
  </nav>