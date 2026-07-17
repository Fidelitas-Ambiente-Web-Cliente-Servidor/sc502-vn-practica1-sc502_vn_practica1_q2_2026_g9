const buscador = document.getElementById("buscador");
 
if (buscador) {
  buscador.addEventListener("input", function () {
    const texto = buscador.value.toLowerCase();
    const cards = document.querySelectorAll("#contenedor-cursos .card");
 
    cards.forEach(function (card) {
      const nombre = card.dataset.nombre || "";
      const descripcion = card.dataset.descripcion || "";
      const coincide = nombre.includes(texto) || descripcion.includes(texto);
      card.style.display = coincide ? "" : "none";
    });
  });
}
 