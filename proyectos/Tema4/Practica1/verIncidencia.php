<?php include_once('header.php');?>

<div class="card text-center">
  <div class="card-header">
    <?php
        echo "Incidencia con ID: " . $_REQUEST['id_incidencia']; 
    ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">
        <?php
            echo "Titulo: " . $_REQUEST['titulo']; 
        ?>
    </h5>
    <p class="card-text">
        <?php
            echo "Descripcion: " . $_REQUEST['descripcion']; 
            echo "<br>Tipo: " . $_REQUEST['tipo']; 
            echo "<br> Estado: " . $_REQUEST['estado']; 
            echo "<br> Prioridad: " . $_REQUEST['prioridad'];
            echo "<br> id_tecnico: " . $_REQUEST['id_tecnico'];
            echo "<br> fecha_creacion: " . $_REQUEST['fecha_creacion'];
            echo "<br> fecha_actualizacion: " . $_REQUEST['fecha_actualizacion'];
        ?>
    </p>
    <a href="dashboard.php" class="btn btn-primary">Volver</a>
    <button type="button"class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditarIncidencia">
        Editar
    </button>
  </div>
</div>

<?php include_once('footer.php');?>