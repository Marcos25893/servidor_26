<!-- Crear Incidencia -->
<div class="modal fade" id="CrearIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Incidencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controlador.php?accion=NuevaIncidencia" method="POST" id="fni">
            <div class="form-floating">
                <input type="text" class="form-control" name="titulo" required>
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="descripcion" required>
                <label for="floatingInput">descripcion</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="tipo" required>
                    <option value="">Selecciona tipo</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Red">Red</option>
                    <option value="Otros">Otros</option>
                </select>
                <label for="floatingInput">Tipo de Incidencia</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="prioridad" required>
                    <option value="">Selecciona Prioridad</option>
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                    <option value="Crítica">Crítica</option>
                </select>
                <label for="floatingInput">Prioridad</label>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="fni">Crear Incidencia</button>
      </div>
    </div>
  </div>
</div>

<!-- Eliminar Incidencia -->
<div class="modal fade" id="BorrarIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Incidencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controlador.php?accion=delIncidencia" method="POST" id="fbi">
              <label for="floatingInput">¿Estas seguro que quieres eliminar la incidencia?</label>
              <input type="hidden" name="id_incidencia" value="<?= $incidencia['id_incidencia'] ?>">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger" form="fbi">Eliminar Incidencia</button>
      </div>
    </div>
  </div>
</div>


<!-- Ver Incidencia -->
<div class="modal fade" id="VerIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>
          <?php
            echo "Titulo: " . $incidencia['titulo']; 
          ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <p>
            <?php
              echo "Descripcion: " . $incidencia['descripcion']; 
              echo "<br>Tipo: " . $incidencia['tipo']; 
              echo "<br> Estado: " . $incidencia['estado']; 
              echo "<br> Prioridad: " . $incidencia['prioridad'];
              echo "<br> id_tecnico: " . $incidencia['id_tecnico'];
              echo "<br> fecha_creacion: " . $incidencia['fecha_creacion'];
              echo "<br> fecha_actualizacion: " . $incidencia['fecha_actualizacion'];
            ?>
          </p>
      </div>
      <div class="modal-footer">
        <a href="dashboard.php" class="btn btn-primary">Volver</a>
        <button type="button"class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#EditarIncidencia">
            Editar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Editar Incidencia -->
<div class="modal fade" id="EditarIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Incidencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controlador.php?accion=editIncidencia" method="POST" id="fei">
            <div class="form-floating">
                <input type="text" class="form-control" name="titulo" value="<?= $incidencia['titulo'] ?>" required>
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="descripcion" value="<?= $incidencia['descripcion'] ?>" required>
                <label for="floatingInput">descripcion</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="tipo" required value="<?= $incidencia['tipo'] ?>">
                    <option value="">Selecciona tipo</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Red">Red</option>
                    <option value="Otros">Otros</option>
                </select>
                <label for="floatingInput">Tipo de Incidencia</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="estado" required>
                    <option value="">Selecciona Estado</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Resuelta">Resuelta</option>
                    <option value="Cerrada">Cerrada</option>
                </select>
                <label for="floatingInput">Tipo de Incidencia</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="prioridad" required>
                    <option value="">Selecciona Prioridad</option>
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                    <option value="Crítica">Crítica</option>
                </select>
                <label for="floatingInput">Prioridad</label>
            </div>
            <input type="hidden" name="id_incidencia" value="<?= $incidencia['id_incidencia'] ?>">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="fei">Editar Incidencia</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>