/*
Todo el código anterior de profesores.js queda aquí dentro.
const profesores = [
  {
    nombre: "Laura Méndez",
    especialidad: "Desarrollo Front-End",
    descripcion: "Especialista en diseño web responsive y experiencia de usuario.",
    foto: "images/Html_Css.jpg",
    correo: "laura@academia.com",
    cursosQueImparte: "HTML, CSS y Diseño Responsive"
  },
  {
    nombre: "Carlos Ramírez",
    especialidad: "JavaScript y React",
    descripcion: "Desarrollador con experiencia en aplicaciones web modernas.",
    foto: "images/JS.png",
    correo: "carlos@academia.com",
    cursosQueImparte: "JavaScript, React y Node.js"
  },
  {
    nombre: "Ana González",
    especialidad: "Python y Back-End",
    descripcion: "Apasionada por la automatización y el desarrollo de APIs.",
    foto: "images/Python.png",
    correo: "ana@academia.com",
    cursosQueImparte: "Python, Django y Flask"
  },
  {
    nombre: "David Vargas",
    especialidad: "Bases de Datos",
    descripcion: "Experto en modelado de datos y consultas SQL avanzadas.",
    foto: "images/Sql.png",
    correo: "david@academia.com",
    cursosQueImparte: "SQL, Oracle y Modelado de Datos"
  }
];

const contenedor = document.getElementById("contenedorProfesores");

profesores.forEach((profesor, index) => {
  const tarjeta = document.createElement("article");
  tarjeta.classList.add("teacher-card");
  tarjeta.dataset.id = index;

  tarjeta.innerHTML = `
    <img src="${profesor.foto}" alt="${profesor.nombre}">
    <h3>${profesor.nombre}</h3>
    <span class="especialidad">${profesor.especialidad}</span>
    <p>${profesor.descripcion}</p>
  `;

  contenedor.appendChild(tarjeta);

  tarjeta.addEventListener("click", () => {
    document.getElementById("modalNombre").textContent = profesor.nombre;
    document.getElementById("modalEspecialidad").textContent = profesor.especialidad;
    document.getElementById("modalDescripcion").textContent = profesor.descripcion;
    document.getElementById("modalCorreo").textContent = profesor.correo;
    document.getElementById("modalCursos").textContent = profesor.cursosQueImparte;
    document.getElementById("modalFoto").src = profesor.foto;

    const modal = new bootstrap.Modal(document.getElementById("profesorModal"));
    modal.show();
  });
});

Este código podrá reutilizarse en la Tarea 4.
*/