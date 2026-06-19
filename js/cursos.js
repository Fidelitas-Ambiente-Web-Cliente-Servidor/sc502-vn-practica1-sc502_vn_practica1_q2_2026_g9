const cursos = [
  {
    nombre: "HTML y CSS",
    descripcion: "Aprende a construir páginas web modernas, semánticas y con diseño responsive desde cero.",
    categoria: "Desarrollo Web",
    duracion: "40 horas",
    precio: "₡15,000",
    imagen: "images/Html_Css.jpg"
  },
  {
    nombre: "JavaScript Básico",
    descripcion: "Domina la lógica de programación y aprende a hacer tus sitios web interactivos y dinámicos.",
    categoria: "Desarrollo Web",
    duracion: "50 horas",
    precio: "₡18,000",
    imagen: "images/JS.png"
  },
  {
    nombre: "Bootstrap y Diseño Responsive",
    descripcion: "Crea layouts modernos y adaptables a cualquier dispositivo usando el framework Bootstrap.",
    categoria: "Desarrollo Web",
    duracion: "30 horas",
    precio: "₡14,000",
    imagen: "images/bootstrap.png"
  },
  {
    nombre: "Bases de Datos con SQL",
    descripcion: "Aprende a diseñar, consultar y administrar bases de datos relacionales utilizando SQL.",
    categoria: "Datos y Programación",
    duracion: "45 horas",
    precio: "₡17,000",
    imagen: "images/Sql.png"
  },
  {
    nombre: "Python para Principiantes",
    descripcion: "Inicia tu camino en la programación con Python, uno de los lenguajes más versátiles del mundo.",
    categoria: "Datos y Programación",
    duracion: "60 horas",
    precio: "₡20,000",
    imagen: "images/python.png"
  },
  {
    nombre: "Introducción a la IA",
    descripcion: "Conoce los conceptos fundamentales de la inteligencia artificial y sus aplicaciones en el mundo real.",
    categoria: "Datos y Programación",
    duracion: "35 horas",
    precio: "₡22,000",
    imagen: "images/IA.jpg"
  }
];

let categoriaActual = "todas";

const contenedor = document.getElementById("contenedor-cursos");
const buscador = document.getElementById("buscador");
const botones = document.querySelectorAll(".filtro-btn");

function mostrarCursos(lista) {
  contenedor.innerHTML = lista.map(function (curso) {
    return `
      <article class="card">
        <img src="${curso.imagen}" alt="${curso.nombre}">
        <div class="card-body">
          <span class="badge">${curso.categoria}</span>
          <h3>${curso.nombre}</h3>
          <p>${curso.descripcion}</p>
          <div class="card-meta">
            <span>${curso.duracion}</span>
            <span class="precio">${curso.precio}</span>
          </div>
          <a href="cursos.html" class="btn-card">Ver más</a>
        </div>
      </article>
    `;
  }).join("");
}

function filtrarCursos() {
  const texto = buscador.value.toLowerCase();

  const resultado = cursos.filter(function (curso) {
    const coincideCategoria = categoriaActual === "todas" || curso.categoria === categoriaActual;
    const coincideTexto = curso.nombre.toLowerCase().includes(texto) || curso.descripcion.toLowerCase().includes(texto);
    return coincideCategoria && coincideTexto;
  });

  mostrarCursos(resultado);
}

buscador.addEventListener("input", filtrarCursos);

botones.forEach(function (boton) {
  boton.addEventListener("click", function () {
    categoriaActual = boton.dataset.categoria;
    filtrarCursos();
  });
});

mostrarCursos(cursos);