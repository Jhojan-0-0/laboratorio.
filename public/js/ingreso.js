$(document).ready(function () {
  listaQuimico();
  eliminar();
  Buscarquimico();
});

function listaQuimico() {
  $.ajax({
    type: "GET",
    url: `http://localhost/laboratorio/ingreso/listarQuimico`,
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
                  <td><a class="button" href="http://localhost/katariPrice/personal/detalles/${element.idpersonal}">Detalles</a></td>
                  <td><button class="button alert" id="eliminar">Eliminar</button></td>
              </tr>`;
      });
      $("#mostrar").html(html);
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function Buscarquimico(query) {
  $.ajax({
    type: "GET",
    url: "http://localhost/laboratorio/ingreso/buscarquimico",
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
                      <td><button id="tasks" class="tasks-edit success button">Informacion</button></td>
                      <td><button class="button alert" id="eliminar">Eliminar</button></td>
                  </tr>`;
      });
      $("#mostrar").html(template);
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
      url: "http://localhost/laboratorio/ingreso/delete/",
      data: { id },
      success: function (response) {
        // confirmation(1, "Eliminado Correctamente");
        alert("Eliminado correctamente");
        listaQuimico();
      },
      error: function (error) { 
        // confirmation(0, "ERROR AL ELIMINAR");
        console.log("error:" + error);
      },
    });
  });
}
