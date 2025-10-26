<?php include_once('cabecera.php');?>

<div class="card text-center">
  <div class="card-header">
    <?php
        echo "Proyecto con Indentificador: " . $_REQUEST['id']; 
    ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">
        <?php
        echo "Nombre: " . $_REQUEST['nombre']; 
        ?>
    </h5>
    <p class="card-text">
        <?php
          echo "Fecha de inicio: " . $_REQUEST['fechaInicio']; 
          echo "<br> Fecha fin prevista: " . $_REQUEST['fechaFinPrevista']; 
          echo "<br> Días transcurridos: " . $_REQUEST['diasTranscurridos']; 
          echo "<br> <div class='progress' role='progressbar' aria-label='Basic example' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100'>
                  <div class='progress-bar' style='width: " . $_REQUEST['porcentajeCompletado'] . "%'></div>
                </div> "; 
          echo "<br> Importancia: " . $_REQUEST['importancia'];
        ?>
    </p>
    <a href="proyectos.php" class="btn btn-primary">Volver</a>
    <?php
        echo "<a href='controlador.php?accion=delProyectoId&id=" . $_REQUEST['id'] . "' class='btn btn-danger'>Eliminar</a>"
    ?>
  </div>
</div>

<?php include_once('pie.php');?>