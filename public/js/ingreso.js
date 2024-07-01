$(document).ready(function () {
  // tabla mostrar inicio
  $("#form-ingreso").hide();

  $("#nuevo").click(function () {
    $("#tabla-ingreso").hide();
    $("#form-ingreso").show();
  });

  buscarQuimico;
  // muestra los quimicos buscados
  function buscarQuimico(query) {
    $.ajax({
      type: "GET",
      url: "http://localhost/laboratorio/ingreso/buscarquimico",
      data: { query: query },
      success: function (response) {
        mostrar = JSON.parse(response);
        let template = "";
        mostrar.forEach((mostrando) => {
          template += `
                    <tr mostrandoId="${mostrando.idquimico}" id="${mostrando.idquimico}">
                        <td>${mostrando.idquimico}</td>
                        <td>${mostrando.nombre}</td>
                        <td>${mostrando.concentracion}</td>
                        <td>${mostrando.tipoEnvace}</td>
                        <td>${mostrando.tamanio}</td>
                        <td>${mostrando.marca}</td>
                        <td>${mostrando.peso}</td>
                        <td>${mostrando.cantidad}</td>
                        <td>${mostrando.feFabricacion}</td>
                        <td>${mostrando.feVencimiento}</td>
                        <td>${mostrando.codProducto}</td>
                        <td>${mostrando.advertencia}</td>
                        <td>${mostrando.foto}</td>
                        <td>${mostrando.tipo}</td>
                        <td>${mostrando.precio}</td>
                        <td>${mostrando.clasificacion}</td>
                        <td><button id="tasks" class="tasks-edit success button">Mas Informacion</button></td>
                    </tr>
                `;
        });
        $("#mostrar").html(template);
      },
      error: function (error) {
        console.log("ERROR EN LA PETICION: " + error);
      },
    });
  }
  // muestra datos en la tabla

  function mostrarDato() {
    $.ajax({
      type: "GET",
      url: "http://localhost/laboratorio/ingreso/mostrarDato",
      // beforeSend: function () {
      //   var miimagen =
      //     "<img src='http://localhost/laboratorio/public/images/cargando.gif' alt='cargando....'>";
      //   $("#mostrar").html(miimagen);
      // },
      success: function (response) {
        mostrar = JSON.parse(response);
        template = "";
        mostrar.forEach((mostrando) => {
          template += `
                    <tr mostrandoId="${mostrando.idquimico}" id="${mostrando.idquimico}">
                        <td>${mostrando.idquimico}</td>
                        <td>${mostrando.nombre}</td>
                        <td>${mostrando.concentracion}</td>
                        <td>${mostrando.tipoEnvace}</td>
                        <td>${mostrando.tamanio}</td>
                        <td>${mostrando.marca}</td>
                        <td>${mostrando.peso}</td>
                        <td>${mostrando.cantidad}</td>
                        <td>${mostrando.feFabricacion}</td>
                        <td>${mostrando.feVencimiento}</td>
                        <td>${mostrando.codProducto}</td>
                        <td>${mostrando.advertencia}</td>
                        <td>${mostrando.foto}</td>
                        <td>${mostrando.tipo}</td>
                        <td>${mostrando.precio}</td>
                        <td>${mostrando.clasificacion}</td>
                        <td><button id="tasks" class="tasks-edit success button">Mas Informacion</button></td>
                    </tr>
                `;
        });
        $("#mostrar").html(template);
      },
      error: function (error) {
        console.log("ERROR EN LA PETICION: " + error);
      },
    });
  }
  mostrarDato();
  // insertar datos de quimicos
  $("#formulario").on("submit", function (event) {
    event.preventDefault();
    // Validar si hay datos en el formulario antes de enviar la solicitud
    var formData = $(this).serializeArray();
    var isEmpty = true;

    // Verificar si algún campo del formulario tiene algún valor
    for (var i = 0; i < formData.length; i++) {
      if (formData[i].value !== "") {
        isEmpty = false;
        break;
      }
    }
    // Si hay datos, proceder con la solicitud AJAX para insertar en la base de datos
    $.ajax({
      type: "POST",
      url: "http://localhost/laboratorio/ingreso/registrarQuimico",
      data: $(this).serialize(),
      success: function (response) {
        console.log("INSERCION EXITOSA");
        console.log(response);
        // Ocultar el formulario y mostrar la tabla actualizada
        $("#form-ingreso").hide();
        $("#tabla-ingreso").show();
        mostrarDato(); // Actualizar la tabla
        $("#formulario")[0].reset(); // Limpiar el formulario
      },
      error: function (error) {
        console.log("INSERCION FALLIDA");
        // alert("No se realizó ningún registro.");
        $("#formulario")[0].reset();
      },
    });
  });

  $("#cerrar-boton").click(function () {
    $("#form-ingreso").hide();
    $("#tabla-ingreso").show();
    $("#formulario")[0].reset();
  });
  $("#buscar").on("input", function () {
    buscarQuimico($(this).val());
  });
});
