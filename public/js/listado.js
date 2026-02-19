var host = "localhost";

$(document).ready(function () {
  listaComunes();
  listafiscalizados();
  listaacidos();
  listabasicos();
});

function listaComunes() {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio./listado/getComunes`,
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
                <td>${element.formula}</td>

            </tr>`;
      });
      $("#quimicos-comunes").html(html);
      initPaginador(15, "quimicos-comunes", "paginador-quimicos-comunes"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function listafiscalizados() {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio./listado/getFiscalizados`,
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
                <td>${element.formula}</td>

            </tr>`;
      });
      $("#quimicos-fiscalizados").html(html);
      initPaginador(15, "quimicos-fiscalizados", "paginador-quimicos-fiscalizados"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function listaacidos() {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio./listado/getAcidos`,
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
                <td>${element.clasificacion}</td>
                <td>${element.formula}</td>

            </tr>`;
      });
      $("#quimicos-acidos").html(html);
      initPaginador(15, "quimicos-acidos", "paginador-quimicos-acidos"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function listabasicos() {
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio./listado/getBasicos`,
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
                <td>${element.clasificacion}</td>
                <td>${element.formula}</td>

            </tr>`;
      });
      $("#quimicos-basicos").html(html);
      initPaginador(15, "quimicos-basicos", "paginador-quimicos-basicos"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}