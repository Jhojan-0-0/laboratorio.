$(document).ready(function () {
    $("#modal-login").hide();
    listaEntrega();
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
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
  }