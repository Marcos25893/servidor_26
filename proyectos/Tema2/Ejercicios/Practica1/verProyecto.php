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
        echo "Descripción del Proyecto: " . $_REQUEST['descripcion']; 
        echo "<br> Año de realización: " . $_REQUEST['ano']; 
        echo "<br> Coste del Proyecto: " . $_REQUEST['coste'] . "€"; 
        ?>
    </p>
    <a href="proyectos.php" class="btn btn-primary">Volver</a>
    <?php
        echo "<a href='controlador.php?accion=delProyectoId&id=" . $_REQUEST['id'] . "' class='btn btn-danger'>Eliminar</a>"
    ?>
  </div>
</div>

<?php include_once('pie.php');?>