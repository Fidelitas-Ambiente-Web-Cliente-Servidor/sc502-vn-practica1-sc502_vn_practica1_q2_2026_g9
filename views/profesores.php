<?php

$titulo = 'Profesores | Academia Ficticia';

require __DIR__ . '/layout/header.php';

?>

<link rel="stylesheet" href="css/profesores.css">

<main>

    <section class="page-header">
        <h1>Nuestro Equipo de Profesores</h1>

        <p>
            Profesionales apasionados por enseñar tecnología y desarrollo web.
        </p>
    </section>

    <section class="teachers-section">

        <?php if (empty($profesores)): ?>

            <p>No hay profesores registrados.</p>

        <?php else: ?>

            <?php foreach ($profesores as $profesor): ?>

                <article class="teacher-card">

                    <img
                        src="<?= htmlspecialchars($profesor['foto']) ?>"
                        alt="<?= htmlspecialchars($profesor['nombre']) ?>"
                    >

                    <h3>
                        <?= htmlspecialchars($profesor['nombre']) ?>
                    </h3>

                    <span class="especialidad">
                        <?= htmlspecialchars($profesor['especialidad']) ?>
                    </span>

                    <p>
                        <?= htmlspecialchars($profesor['descripcion']) ?>
                    </p>

                    <a
                        href="index.php?controller=profesores&action=show&id=<?= $profesor['id'] ?>"
                        class="btn-card"
                    >
                        Ver perfil
                    </a>

                </article>

            <?php endforeach; ?>

        <?php endif; ?>

    </section>

    <section class="mision-vision">

        <div class="info-box">
            <h2>Misión</h2>

            <p>
                Brindar educación tecnológica accesible y de calidad para formar
                profesionales preparados para el mundo digital.
            </p>
        </div>

        <div class="info-box">
            <h2>Visión</h2>

            <p>
                Ser una academia líder en formación tecnológica e innovación
                educativa en Latinoamérica.
            </p>
        </div>

    </section>

</main>

<?php require __DIR__ . '/layout/footer.php'; ?>