$(document).ready(function () {

    $(document).foundation();

    console.log("Autocomplete existe:", typeof $.fn.autocomplete);

    // =========================
    // AUTOCOMPLETE
    // =========================
    $("#codPersonal").autocomplete({
        minLength: 2,
        source: function (request, response) {
            $.ajax({
                url: BASE_URL + 'solicitud/codPersonal',
                dataType: "json",
                data: { q: request.term },
                success: function (data) {
                    response(data);
                },
                error: function (xhr, status, error) {
                    console.error("Error AJAX COD PERSONAL:", error);
                }
            });
        },

        focus: function (event, ui) {
            $("#codPersonal").val(ui.item.codPersonal);
            return false;
        },

        select: function (event, ui) {

            $("#idpersonal").val(ui.item.id);

            $("#idpersonal").data('cod', ui.item.codPersonal);

            $("#codPersonal").val(ui.item.codPersonal);
            $("#nomtrabajador").val(ui.item.nombre + ' ' + ui.item.apellidos);
            $("#escuelaprofesional").val(ui.item.entidad);

            return false;
        }
    });

    // =========================
    // LIMPIAR SOLO SI EL USUARIO CAMBIA EL VALOR
    // =========================
    $("#codPersonal").on('input', function () {
        let current = $(this).val();
        let selected = $("#idpersonal").data('cod');

        if (selected && current !== selected) {
            $("#idpersonal").val('');
            $("#idpersonal").removeData('cod');

            $("#nomtrabajador").val('');
            $("#escuelaprofesional").val('');
        }
    });

    // =========================
    // VALIDAR AL SALIR DEL INPUT
    // =========================
    $("#codPersonal").on("blur", function () {
        if ($(this).val() !== "" && $("#idpersonal").val() === "") {
            alert("Debe seleccionar un personal válido de la lista");

            $(this).val('');
            $("#nomtrabajador").val('');
            $("#escuelaprofesional").val('');
        }
    });

    // =========================
    // BLOQUEAR ENTER SI NO SELECCIONA
    // =========================
    $("#codPersonal").on("keydown", function (e) {
        if (e.key === "Enter") {
            if ($("#idpersonal").val() === "") {
                e.preventDefault();
                alert("Seleccione un personal de la lista");
            }
        }
    });

    // =========================
    // VALIDACIÓN FINAL AL ENVIAR
    // =========================
    $("form").on("submit", function (e) {

        let id = $("#idpersonal").val();

        console.log("ID PERSONAL FINAL:", id);

        if (!id) {
            e.preventDefault();

            alert("Debe seleccionar un personal válido antes de enviar");

            $("#codPersonal").focus();
            return false;
        }
    });

});