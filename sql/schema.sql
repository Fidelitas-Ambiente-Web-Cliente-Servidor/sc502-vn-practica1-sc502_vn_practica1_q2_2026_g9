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


CREATE TABLE IF NOT EXISTS cursos (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(150)  NOT NULL,
    descripcion TEXT          NOT NULL,
    categoria   VARCHAR(100)  NOT NULL,
    duracion    VARCHAR(50)   NOT NULL,
    precio      VARCHAR(50)   NOT NULL,
    imagen      VARCHAR(255)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
INSERT INTO cursos (nombre, descripcion, categoria, duracion, precio, imagen) VALUES
('HTML y CSS', 'Aprende a construir páginas web modernas, semánticas y con diseño responsive desde cero.', 'Desarrollo Web', '40 horas', '₡15,000', 'images/Html_Css.jpg'),

('JavaScript Básico', 'Domina la lógica de programación y aprende a hacer tus sitios web interactivos y dinámicos.', 'Desarrollo Web', '50 horas', '₡18,000', 'images/JS.png'),

('Bootstrap y Diseño Responsive', 'Crea layouts modernos y adaptables a cualquier dispositivo usando el framework Bootstrap.', 'Desarrollo Web', '30 horas', '₡14,000', 'images/bootstrap.png'),

('Bases de Datos con SQL', 'Aprende a diseñar, consultar y administrar bases de datos relacionales utilizando SQL.', 'Datos y Programación', '45 horas', '₡17,000', 'images/Sql.png'),

('Python para Principiantes', 'Inicia tu camino en la programación con Python, uno de los lenguajes más versátiles del mundo.', 'Datos y Programación', '60 horas', '₡20,000', 'images/python.png'),

('Introducción a la IA', 'Conoce los conceptos fundamentales de la inteligencia artificial y sus aplicaciones en el mundo real.', 'Datos y Programación', '35 horas', '₡22,000', 'images/IA.jpg');

CREATE TABLE IF NOT EXISTS profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    especialidad VARCHAR(150) NOT NULL,
    descripcion TEXT NOT NULL,
    foto VARCHAR(255) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    cursos VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO profesores
(nombre, especialidad, descripcion, foto, correo, cursos)
VALUES
(
    'Laura Méndez',
    'Desarrollo Front-End',
    'Especialista en diseño web responsive y experiencia de usuario.',
    'images/Html_Css.jpg',
    'laura@academia.com',
    'HTML, CSS y Diseño Responsive'
),
(
    'Carlos Ramírez',
    'JavaScript y React',
    'Desarrollador con experiencia en aplicaciones web modernas.',
    'images/JS.png',
    'carlos@academia.com',
    'JavaScript, React y Node.js'
),
(
    'Ana González',
    'Python y Back-End',
    'Apasionada por la automatización y el desarrollo de APIs.',
    'images/Python.png',
    'ana@academia.com',
    'Python, Django y Flask'
),
(
    'David Vargas',
    'Bases de Datos',
    'Experto en modelado de datos y consultas SQL avanzadas.',
    'images/Sql.png',
    'david@academia.com',
    'SQL, Oracle y Modelado de Datos'
),
(
    'Sofía Herrera',
    'Inteligencia Artificial',
    'Especialista en aprendizaje automático y aplicaciones de inteligencia artificial.',
    'images/IA.jpg',
    'sofia@academia.com',
    'Inteligencia Artificial y Machine Learning'
);