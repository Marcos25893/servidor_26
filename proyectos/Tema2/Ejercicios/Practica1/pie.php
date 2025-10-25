 <!-- Añadir Proyecto  -->
 <div class="modal fade" id="nuevoProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fnp">
                     <div class="form-floating">
                        <input type="text" class="form-control" name="nombre" required>
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" class="form-control" name="fechaInicio" required>
                        <label for="floatingInput">Fecha de Inicio</label>
                    </div>

                    <div class="form-floating">
                        <input type="date" class="form-control" name="fechaFinPrevista" required>
                        <label for="floatingInput">Fecha Fin Prevista</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" name="diasTranscurridos" min="0" required>
                        <label for="floatingInput">Días Transcurridos</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" name="porcentajeCompletado" min="0" max="100" required>
                        <label for="floatingInput">% Completado</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-control" name="importancia" required>
                            <option value="">Selecciona importancia</option>
                            <option value="1">1 - Muy baja</option>
                            <option value="2">2 - Baja</option>
                            <option value="3">3 - Media</option>
                            <option value="4">4 - Alta</option>
                            <option value="5">5 - Muy alta</option>
                        </select>
                        <label for="floatingInput">Importancia</label>
                    </div>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary" name="nuevoProyecto" form="fnp">Guardar</button>
             </div>
         </div>
     </div>
 </div>

  <!-- Eliminar Proyecto Por ID  -->
 <div class="modal fade" id="eliminarId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Proyecto</h1>
                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fepi">
                     <div class=" form-floating">
                         <input type="text" class="form-control" name="id">
                         <label for="floatingInput">ID del Proyecto Que quieres Eliminar</label>
                     </div>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                 <button type="submit" class="btn btn-primary" name="eliminarId" form="fepi">Eliminar</button>
             </div>
         </div>
     </div>
 </div>

   <!-- Eliminar Todos los Proyectos -->
 <div class="modal fade" id="eliminarTodo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Todos los Proyecto</h1>
                 <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fet">
                     <div>
                         <label>¿Seguro que quieres eliminar todos los proyectos?</label>
                     </div>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" name="eliminarTodo" form="fet">Si</button>
             </div>
         </div>
     </div>
 </div>

<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>

<script> src="./js/bootstrap.min.js"</script>
<script src="./js/demo/datatables-demo.js"></script>
</body>

</html>