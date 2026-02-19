var host = "localhost";

$(document).ready(function () {
  listaQuimico();  
});

function listaQuimico() {
  
  $.ajax({
    type: "GET",
    url: `http://${host}/laboratorio./validar/listarQuimico`,
    success: function (response) {
      let data = response;
      let html = `
          

      `;
      data.forEach((element) => {
        html += `

          `;
      });
      $("#mostrar").html(html);
      initPaginador(15, "mostrar", "paginador-ingreso"); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

