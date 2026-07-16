/*
const cursosDestacados = [
  {
    nombre: "HTML y CSS",
    descripcion: "Aprende a crear páginas web modernas y responsive.",
    categoria: "Desarrollo Web"
  },
  {
    nombre: "JavaScript Básico",
    descripcion: "Conoce la lógica necesaria para dar vida a tus sitios web.",
    categoria: "Programación"
  },
  {
    nombre: "Bases de Datos",
    descripcion: "Aprende a organizar y consultar información con SQL.",
    categoria: "Bases de Datos"
  }
];

const contenedorCursos = document.getElementById("contenedor-cursos");

function mostrarCursosDestacados() {
  cursosDestacados.forEach(function (curso) {
    const tarjeta = document.createElement("article");
    tarjeta.classList.add("card");

    const nombre = document.createElement("h3");
    nombre.textContent = curso.nombre;

    const descripcion = document.createElement("p");
    descripcion.textContent = curso.descripcion;

    const boton = document.createElement("a");
    boton.href = "cursos.html";
    boton.classList.add("btn-card");
    boton.textContent = "Ver más";

    tarjeta.appendChild(nombre);
    tarjeta.appendChild(descripcion);
    tarjeta.appendChild(boton);

    contenedorCursos.appendChild(tarjeta);
  });
}

mostrarCursosDestacados();

*/