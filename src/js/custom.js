// Función para bloquear el scroll
function disableScroll() {
  document.body.style.overflow = "hidden";
}

// Función para habilitar el scroll
function enableScroll() {
  document.body.style.overflow = "";
}

// Función para ocultar el spinner y habilitar el scroll
function hideSpinnerAndEnableScroll() {
  document.getElementById("loadingSpinner").style.display = "none";
  enableScroll();
}

// Bloquear el scroll solo si la página aún no ha cargado completamente
if (document.readyState !== "complete") {
  disableScroll();
}

// Establecer un tiempo máximo para el bloqueo del scroll (por ejemplo, 5 segundos)
const maxTimeout = setTimeout(hideSpinnerAndEnableScroll, 5000);

window.addEventListener("load", function () {
  clearTimeout(maxTimeout); // Limpiar el timeout máximo si la página carga antes
  requestAnimationFrame(function () {
    setTimeout(hideSpinnerAndEnableScroll, 500);
  });
});
