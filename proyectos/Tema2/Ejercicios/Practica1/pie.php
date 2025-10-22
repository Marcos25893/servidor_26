 <!--  -->
 <div class="modal fade" id="nuevoProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fnp">
                     <div class=" form-floating">
                         <input type="text" class="form-control" name="id">
                         <label for="floatingInput">ID</label>
                     </div>
                     <div class="form-floating">
                         <input type="text" class="form-control" name="nombre">
                         <label for="floatingInput">Name</label>
                     </div>
                     <div class="form-floating">
                         <input type="text" class="form-control" name="posicion">
                         <label for="floatingInput">Position</label>
                     </div>
                     <div class="form-floating">
                         <input type="text" class="form-control" name="oficina">
                         <label for="floatingInput">Office</label>
                     </div>
                     <div class="form-floating">
                         <input type="text" class="form-control" name="edad">
                         <label for="floatingInput">Age</label>
                     </div>
                     <div class="form-floating">
                         <input type="text" class="form-control" name="salario">
                         <label for="floatingInput">Salary</label>
                     </div>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary" name="nuevoProyecto" form="fnp">Guardar</button>
             </div>
         </div>
     </div>
 </div>



<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>


<script src="./js/demo/datatables-demo.js"></script>
</body>

</html>