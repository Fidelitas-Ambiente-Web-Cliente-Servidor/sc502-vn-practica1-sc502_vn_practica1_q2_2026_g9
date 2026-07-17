<?php
$titulo = 'Cursos | Academia Ficticia';
require __DIR__ . '/layout/header.php';
?>
  
  <main>

    <section class="page-header">
      <h1>Catálogo de Cursos</h1>
      <p>Explora nuestra oferta educativa y comienza tu camino en el mundo digital.</p>
    </section>

    <section class="search-section">
      <div class="search-bar">
        <input type="text" id="buscador" placeholder="Buscar curso por nombre o categoría...">
      </div>
    </section>

    <section class="section">

      
      <form method="GET" action="index.php" class="cards filtro-categoria" id="form-categoria">
        <input type="hidden" name="controller" value="cursos">
        <input type="hidden" name="action" value="index">
        <select name="categoria" id="select-categoria" class="btn-card" onchange="document.getElementById('form-categoria').submit()">
          <option value="todas" <?= $categoria === 'todas' ? 'selected' : '' ?>>Todas</option>
          <?php foreach ($categorias as $cat): ?>
            <option value="<?= htmlspecialchars($cat) ?>" <?= $categoria === $cat ? 'selected' : '' ?>>
              <?= htmlspecialchars($cat) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </form>

      <div class="cards" id="contenedor-cursos">
        <?php if (empty($cursos)): ?>
          <p class="sin-resultados">No se encontraron cursos para esta categoría.</p>
        <?php else: ?>
          <?php foreach ($cursos as $curso): ?>
            <article class="card" data-nombre="<?= htmlspecialchars(strtolower($curso['nombre'])) ?>" data-descripcion="<?= htmlspecialchars(strtolower($curso['descripcion'])) ?>">
              <img src="<?= htmlspecialchars($curso['imagen']) ?>" alt="<?= htmlspecialchars($curso['nombre']) ?>">
              <div class="card-body">
                <span class="badge"><?= htmlspecialchars($curso['categoria']) ?></span>
                <h3><?= htmlspecialchars($curso['nombre']) ?></h3>
                <p><?= htmlspecialchars($curso['descripcion']) ?></p>
                <div class="card-meta">
                  <span><?= htmlspecialchars($curso['duracion']) ?></span>
                  <span class="precio"><?= htmlspecialchars($curso['precio']) ?></span>
                </div>
                <a href="index.php?controller=cursos&action=index" class="btn-card">Ver más</a>
              </div>
            </article>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </section>

  </main>

 
  <script src="js/cursos.js"></script>

<?php require __DIR__ . '/layout/footer.php'; ?>