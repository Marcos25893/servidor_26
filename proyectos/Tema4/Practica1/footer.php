<!-- Crear Incidencia -->
<div class="modal fade" id="CrearIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Incidencia</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controlador.php" method="POST" id="fni">
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
        <button type="submit" class="btn btn-primary" name="nuevaIncidencia" form="fni">Crear Incidencia</button>
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
        <form action="controlador.php" method="POST" id="fei">
            <div class="form-floating">
                <input type="text" class="form-control" name="titulo" value="<?= $_REQUEST['titulo'] ?>" required>
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" name="descripcion" value="<?= $_REQUEST['descripcion'] ?>" required>
                <label for="floatingInput">descripcion</label>
            </div>

            <div class="form-floating">
                <select class="form-control" name="tipo" required value="<?= $_REQUEST['tipo'] ?>">
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
            <input type="hidden" name="id_incidencia" value="<?= $_REQUEST['id_incidencia'] ?>">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="editIncidencia" form="fei">Editar Incidencia</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>