var host = "localhost";

$(document).ready(function () {
  listaQuimico();
  eliminar();
  Buscarquimico();
  postQuimico();
  updateQuimico();
});

function listaQuimico() {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio/ingreso/listarQuimico`,
    success: function (response) {
      let data = JSON.parse(response);
      let html = "";
      data.forEach((element) => {
        html += `
              <tr mostrandoId="${element.idquimico}" id="${element.idquimico}">
                  <td>${element.idquimico}</td>
                  <td>${element.nombre}</td>
                  <td>${element.feFabricacion}</td>
                  <td>${element.feVencimiento}</td>
                  <td>${element.codProducto}</td>
                  <td>${element.tipo}</td>
                  <td>${element.clasificacion}</td>
                  <td>${element.formula}</td>
                  <td><a class="button" href="http://${host}/laboratorio/ingreso/informacion/${element.idquimico}">Informacion</a></td>
                  <td><button class="button alert" id="eliminar">Eliminar</button></td>
              </tr>`;
      });
      $("#mostrar").html(html);
      initPaginador(15, "mostrar", "paginador-ingreso"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function Buscarquimico(query) {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio/ingreso/buscarquimico`,
    data: { query: query },
    success: function (response) {
      mostrar = JSON.parse(response);
      let template = "";
      mostrar.forEach((element) => {
        template += `
                  <tr mostrandoId="${element.idquimico}" id="${element.idquimico}">
                      <td>${element.idquimico}</td>
                      <td>${element.nombre}</td>
                      <td>${element.feFabricacion}</td>
                      <td>${element.feVencimiento}</td>
                      <td>${element.codProducto}</td>
                      <td>${element.tipo}</td>
                      <td>${element.clasificacion}</td>
                      <td>${element.formula}</td>
                      <td><a class="button" href="http://${host}/laboratorio/ingreso/informacion/${element.idquimico}">Informacion</a></td>
                      <td><button class="button alert" id="eliminar">Eliminar</button></td>
                  </tr>`;
      });
      $("#mostrar").html(template);
      initPaginador(15, "mostrar", "paginador-ingreso"); 
    },
    error: function (error) {
      console.log("ERROR EN LA PETICION: " + error);
    },
  });
}
$("#buscarquimico").on("input", function () {
  Buscarquimico($(this).val());
});

function eliminar() {
  $(document).on("click", "#eliminar", function () {
    let id = $(this).parent().parent().attr("id");
    $.ajax({
      type: "POST",
      url: `http://${host}/laboratorio/ingreso/delete/`,
      data: { id },
      success: function (response) {
        confirmation(1, "Eliminado Correctamente");
        //alert("Eliminado correctamente");
        listaQuimico();
      },
      error: function (error) { 
        confirmation(0, "ERROR AL ELIMINAR");
        // console.log("error:" + error);
      },
    });
  });
}

// CREAR NUEVO QUIMICO
function postQuimico() {
  $("#quimicoIngr").on("submit", function (event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: $(this).attr("action"),
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        confirmation(1, "Quimico ingresado ¡Exitosamente!");
        //alert("Eliminado correctamente");
      },
      error: function (error) {
        confirmation(0, "ERROR AL CREAR");
        //console.error("Error:", error);
        // Aquí puedes manejar los errores
        //alert("Hubo un error al enviar el formulario.");
      },
    });
  });
}

function updateQuimico() {
  $("#update-quimico").on("submit", function (event) {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: $(this).attr("action"),
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        confirmation(1, "Actualizado Correctamente");
        // console.log("actualizado correctamente");
        // alert("Personal actualizado correctamente");
      },
      error: function (error) {
        confirmation(0, "ERROR AL ACTUALIZAR EL PERSONAL");
        // console.error("Error:", error);
        // alert("Hubo un error al enviar el formulario Personal.");
      },
    });
  });
}
