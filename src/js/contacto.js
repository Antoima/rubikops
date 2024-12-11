document.querySelector("form").addEventListener("submit", function (event) {
  var submitButton = document.getElementById("submit-button");
  var buttonText = document.getElementById("button-text");
  var spinner = document.getElementById("spinner");

  // Deshabilitar el botón de envío
  submitButton.disabled = true;

  // Mostrar el spinner y ocultar el texto del botón
  buttonText.classList.add("hidden");
  spinner.classList.remove("hidden");
});

$(document).ready(function () {
  $("form").on("submit", function (e) {
    e.preventDefault();

    var submitButton = $("#submit-button");
    var buttonText = $("#button-text");
    var spinner = $("#spinner");

    // Deshabilitar el botón de envío
    submitButton.prop("disabled", true);

    // Mostrar el spinner y ocultar el texto del botón
    buttonText.addClass("hidden");
    spinner.removeClass("hidden");

    $.ajax({
      type: "POST",
      url: "src/phpMd/contacto.php",
      data: $(this).serialize(),
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          toastr.success(response.message);
          $("form")[0].reset();
        } else {
          toastr.error(response.message);
        }
      },
      error: function () {
        toastr.error("Hubo un error al procesar el formulario.");
      },
      complete: function () {
        // Restaurar el estado del botón
        submitButton.prop("disabled", false);
        buttonText.removeClass("hidden");
        spinner.addClass("hidden");
      },
    });
  });
});
