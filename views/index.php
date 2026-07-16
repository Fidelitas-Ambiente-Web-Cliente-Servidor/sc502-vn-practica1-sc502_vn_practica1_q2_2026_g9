  <?php require __DIR__ . '/layout/header.php'; ?>
  <main>

    <section class="hero">
      <h1>Academia Ficticia</h1>

      <p>
        Aprende tecnología desde cero y construye tu futuro digital.
      </p>

      <a
        href="index.php?controller=cursos&action=index"
        class="btn"
      >
        Ver cursos
      </a>
    </section>

    <section class="section">
      <h2>Cursos destacados</h2>

      <div id="contenedor-cursos" class="cards">

  <?php foreach ($cursosDestacados as $curso): ?>

    <article class="card">

      <h3>
        <?= htmlspecialchars($curso['nombre']) ?>
      </h3>

      <p>
        <?= htmlspecialchars($curso['descripcion']) ?>
      </p>

      <p>
        <strong>Categoría:</strong>
        <?= htmlspecialchars($curso['categoria']) ?>
      </p>

      <a
        href="index.php?controller=cursos&action=index"
        class="btn-card"
      >
        Ver más
      </a>

    </article>

  <?php endforeach; ?>

</div>
    </section>

    <section class="stats">

      <div>
        <h3>10</h3>
        <p>Estudiantes</p>
      </div>

      <div>
        <h3>5</h3>
        <p>Profesores</p>
      </div>

      <div>
        <h3>8</h3>
        <p>Cursos disponibles</p>
      </div>

    </section>

    <section class="section">
      <h2>Testimonios</h2>

      <div class="testimonials">

        <article class="testimonial">
          <img
            src="images/Cuervo.png"
            alt="Foto de Andrés Duartes"
            class="testimonial-img"
          >

          <p>
            "Gracias a la academia aprendí las bases para crear mi primera página web."
          </p>

          <h4>Andrés Duartes</h4>
        </article>

        <article class="testimonial">
          <p>
            "Los cursos son claros, prácticos y fáciles de seguir."
          </p>

          <h4>Carlos Méndez</h4>
        </article>

      </div>
    </section>

  </main>

 <?php require __DIR__ . '/layout/footer.php'; ?>