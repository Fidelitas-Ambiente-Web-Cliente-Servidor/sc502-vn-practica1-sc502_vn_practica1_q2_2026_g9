USE appdb;

CREATE TABLE IF NOT EXISTS cursos_destacados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    categoria VARCHAR(80) NOT NULL
);

INSERT INTO cursos_destacados
(nombre, descripcion, categoria)
VALUES
(
    'HTML y CSS',
    'Aprende a crear páginas web modernas y responsive.',
    'Desarrollo Web'
),
(
    'JavaScript Básico',
    'Conoce la lógica necesaria para dar vida a tus sitios web.',
    'Programación'
),
(
    'Bases de Datos',
    'Aprende a organizar y consultar información con SQL.',
    'Bases de Datos'
),
(
    'PHP Básico',
    'Aprende a crear aplicaciones web dinámicas con PHP.',
    'Programación'
),
(
    'Diseño Web Responsivo',
    'Adapta tus páginas web para computadoras, tabletas y teléfonos.',
    'Desarrollo Web'
);