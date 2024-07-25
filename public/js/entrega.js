$(document).ready(function () {
    listaEntrega();
    BuscarsEntregas();
  });

  function listaEntrega() {
    $.ajax({
      type: "GET",
      url: `http://localhost/laboratorio/entrega/getEntrega`,
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
        initPaginador(5, "entrega-quimico", "entrega-paginador"); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
  }

  function BuscarsEntregas(query) {
    $.ajax({
      type: "GET",
      url: "http://localhost/laboratorio/entrega/buscarEntregas",
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
      },
      error: function (error) {
        console.log("ERROR EN LA PETICION: " + error);
      },
    });
  }

  $("#buscarEntrega").on("input", function () {
    BuscarsEntregas($(this).val());
  });