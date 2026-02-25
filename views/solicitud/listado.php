<?php require ('views/header.php');?>

<style>
    .table-container {
      margin: 40px auto;
      max-width: 1400px;
      padding: 0 20px;
    }
    h1 {
      text-align: center;
      margin-bottom: 2rem;
    }
    table {
      width: 100%;
      margin-bottom: 2rem;
    }
    th, td {
      text-align: left;
      vertical-align: middle;
    }
    .estado-atencion {
      font-weight: 600;
    }
    .atencion-pendiente  { color: #e67e22; }
    .atencion-atendido   { color: #27ae60; }
    .atencion-rechazado  { color: #c0392b; }
  </style>

  <div class="grid-container">
    <!-- Poner el codigo en HTML aqui -->
    <h1>Listado de Solicitudes de Productos</h1>

    <div class="table-scroll">
      <table class="unstriped hover">
        <thead>
          <tr>
            <th>ID Solicitud</th>
            <th>Cód. Personal</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Unidad</th>
            <th>Uso</th>
            <th>Observaciones</th>
            <th>Atención</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de fila 1 -->
          <tr>
            <td>SOL-2025-0012</td>
            <td>PER-0456</td>
            <td>Guantes de nitrilo (caja x 100)</td>
            <td>15</td>
            <td>CAJA</td>
            <td>Limpieza y desinfección de laboratorio</td>
            <td>Urgente - se requiere antes del viernes</td>
            <td class="estado-atencion atencion-pendiente">Pendiente</td>
          </tr>

          <!-- Ejemplo de fila 2 -->
          <tr>
            <td>SOL-2025-0013</td>
            <td>PER-0789</td>
            <td>Alcohol etílico 96°</td>
            <td>20</td>
            <td>LT</td>
            <td>Desinfección de equipos y superficies</td>
            <td></td>
            <td class="estado-atencion atencion-atendido">Atendido</td>
          </tr>

          <!-- Ejemplo de fila 3 -->
          <tr>
            <td>SOL-2025-0014</td>
            <td>PER-1123</td>
            <td>Tornillos autorroscantes 4x25 mm</td>
            <td>200</td>
            <td>UN</td>
            <td>Mantenimiento de mobiliario</td>
            <td>Color negro mate preferiblemente</td>
            <td class="estado-atencion atencion-pendiente">Pendiente</td>
          </tr>

          <!-- Ejemplo de fila 4 -->
          <tr>
            <td>SOL-2025-0015</td>
            <td>PER-0198</td>
            <td>Papel bond A4 75gr</td>
            <td>30</td>
            <td>PAQ</td>
            <td>Uso administrativo general</td>
            <td>Rechazado por falta de stock y presupuesto</td>
            <td class="estado-atencion atencion-rechazado">Rechazado</td>
          </tr>

          <!-- Puedes agregar más filas aquí -->
        </tbody>
      </table>
    </div>

    <div class="text-center">
      <button class="button primary">Nueva Solicitud</button>
      <button class="button secondary">Exportar a Excel</button>
    </div>
  </div>

<?php require ('views/footer.php');?>