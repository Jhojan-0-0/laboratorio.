<?php require ('views/header.php');?>

    <div class="grid-container">
        <!-- Contenido principal -->
        <div class="content">
            <div class="welcome-card">
                <h2 class="system-title">Sistema de Gestión de Inventarios</h2>
                <p>Bienvenido al sistema web de gestión de inventarios del Mega Laboratorio de la Universidad Nacional del Altiplano de Puno.</p>
                <div class="callout primary">
                    <p>Usuario activo: <strong id="current-user">Ludwig Aliaga Montesinos</strong> | Rol: <strong>Administrador</strong></p>
                    <p id="ultimo-acceso"></p>
                </div>
                <h4>Funcionalidades principales:</h4>
                <img src="LogoUNAP.png" alt="Logo UNAP" width="200">
                
            </div>
            
            <div class="grid-x grid-margin-x" style="margin-top: 30px;">
                <div class="cell small-12 medium-6 large-3">
                    <div class="callout success text-center">
                        <h5>Productos en stock</h5>
                        <h2>248</h2>
                    </div>
                </div>
                <div class="cell small-12 medium-6 large-3">
                    <div class="callout warning text-center">
                        <h5>Próximos a vencer</h5>
                        <h2>12</h2>
                    </div>
                </div>
                <div class="cell small-12 medium-6 large-3">
                    <div class="callout alert text-center">
                        <h5>Stock mínimo</h5>
                        <h2>7</h2>
                    </div>
                </div>
                <div class="cell small-12 medium-6 large-3">
                    <div class="callout primary text-center">
                        <h5>Usuarios activos</h5>
                        <h2>3</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-6">
                <div class="secondary">
                </div>
            </div>
        </div>
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 medium-6">
                <h2>Misión</h2>
                <p>Desarrollar y transmitir el conocimiento científico, tecnológico y humanístico, formando 
                    profesionales y posgraduados calificados y competitivos, impulsando el desarrollo de la investigación 
                    y la responsabilidad social, la práctica de valores y la identidad cultural, orientadas al 
                    estudiante y la sociedad, con miras a contribuir al desarrollo sostenible de la región y del país.</p>
            </div>
            <div class="cell small-12 medium-6">
                <h2>Visión</h2>
                <p>Formar profesionales y posgraduados calificados y competitivos; aportando a la sociedad los 
                    resultados de la investigación científica, tecnológica y humanística, con identidad cultural 
                    y responsabilidad social, que contribuyan al desarrollo sostenible de la región y del país</p>
            </div>
        </div>
    </div>

<?php require ('views/footer.php');?>

<script>
const ahora = new Date();
const dia = ahora.getDate();
const meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
const mes = meses[ahora.getMonth()];
const año = ahora.getFullYear();
const horas = String(ahora.getHours()).padStart(2,'0');
const minutos = String(ahora.getMinutes()).padStart(2,'0');

document.getElementById("ultimo-acceso").textContent = 
  `Último acceso: ${dia} de ${mes} de ${año}, ${horas}:${minutos} hrs`;
</script>