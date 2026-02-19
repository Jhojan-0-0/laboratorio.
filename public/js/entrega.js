var host = "localhost";

$(document).ready(function () {
    listaEntrega();
    BuscarsEntregas();
    postEntrega();
    postEntidad();
  });

  function listaEntrega() { 
    $.ajax({
      type: "GET",
      url: `http://${host}/laboratorio./entrega/getEntrega`,
      success: function (response) {
        let data = JSON.parse(response);
        let html = "";
        data.forEach((element) => {
          html += `
              <tr mostrandoId="${element.identrega}" id="${element.identrega}">
                  <td>${element.identrega}</td>
                  <td>${element.docente}</td>
                  <td>${element.nombre}</td>
                  <td>${element.fecEntrega}</td>
                  <td>${element.codquimico}</td>
                  <td>${element.cantidad}</td>
                  <td>${element.descripcion}</td>
                  <td>${element.marca}</td>
                  <td>${element.entidad}</td>
              </tr>`;
        });
        $("#entrega-quimico").html(html);
              // function de paginador
        initPaginador(15, "entrega-quimico", "entrega-paginador"); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
  }

  function BuscarsEntregas(query) {
    $.ajax({
      type: "GET",
      url: `http://${host}/laboratorio./entrega/buscarEntregas`,
      data: { query: query },
      success: function (response) {
        mostrar = JSON.parse(response);
        let template = "";
        mostrar.forEach((element) => {
          template += `
                    <tr mostrandoId="${element.identrega}" id="${element.identrega}">
                  <td>${element.identrega}</td>
                  <td>${element.docente}</td>
                  <td>${element.nombre}</td>
                  <td>${element.fecEntrega}</td>
                  <td>${element.codquimico}</td>
                  <td>${element.cantidad}</td>
                  <td>${element.descripcion}</td>
                  <td>${element.marca}</td>
                  <td>${element.entidad}</td>
              </tr>;`;
        });
        $("#entrega-quimico").html(template);
        initPaginador(15, "entrega-quimico", "entrega-paginador"); 
      },
      error: function (error) {
        console.log("ERROR EN LA PETICION: " + error);
      },
    });
  }

  $("#buscarEntrega").on("input", function () {
    BuscarsEntregas($(this).val());
  });

  function postEntrega() {
    $("#quimicoEntr").on("submit", function (event) {
      event.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          confirmation(1, "Entrega guardado ¡Exitosamente!");
          //alert("Eliminado correctamente");
        },
        error: function (error) {
          confirmation(0, "ERROR AL REGISTRAR ENTREGA");
          //console.error("Error:", error);
          // Aquí puedes manejar los errores
          //alert("Hubo un error al enviar el formulario.");
        },
      });
    });
  }

  function postEntidad() {
    $("#entidadCrt").on("submit", function (event) {
      event.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        url: $(this).attr("action"),
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          confirmation(1, "Entidad guardado ¡Exitosamente!");
          //alert("Eliminado correctamente");
        },
        error: function (error) {
          confirmation(0, "ERROR AL REGISTRAR ENTIDAD");
          //console.error("Error:", error);
          // Aquí puedes manejar los errores
          //alert("Hubo un error al enviar el formulario.");
        },
      });
    });
  }