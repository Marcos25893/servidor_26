<?php include_once('header.php'); ?>

    <div >
        

        <div class="m-auto mt-4" style="width: 70vw; height: 70vh;">
            <h1 class="text-center mb-5">Gestor de Incidencias</h1>

            <form action="controlador.php?accion=filtrar" method="post" class="d-flex">
                <legend>Filtrar:</legend>
                <select class="form-select me-2" aria-label="Default select example" name='Estado'>
                <option selected >Estado</option>
                <option value="Todas">Todas</option>
                <option value="Pendiente">Pendiente</option>
                <option value="En proceso">En proceso</option>
                <option value="Resuelta">Resuelta</option>
                <option value="Cerrada">Cerrada</option>
                </select>

                <select class="form-select me-2" aria-label="Default select example" name='Tipo'>
                <option selected >Tipo</option>
                <option value="Todas">Todas</option>
                <option value="Hardware">Hardware</option>
                <option value="Software">Software</option>
                <option value="Red">Red</option>
                <option value="Otros">Otros</option>
                </select>

                <select class="form-select me-2" aria-label="Default select example" name='Prioridad'>
                <option selected >Prioridad</option>
                <option value="Todas">Todas</option>
                <option value="Baja">Baja</option>
                <option value="Media">Media</option>
                <option value="Alta">Alta</option>
                <option value="Crítica">Crítica</option>
                </select>

                <input class="btn btn-primary" type="submit" value="Filtrar">
            </form>

            <form action="controlador.php?accion=buscar" methop="post" class="d-flex justify-content-end mt-3 mb-3">
                <label for="" class="me-2">Buscar Incidencia:</label>
                <input type="search" name="busqueda" style="width: 19vw;" class="me-2">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CrearIncidencia">
            Nueva Incidencia
            </button>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">Título</th>
                <th scope="col">Tipo</th>
                <th scope="col">Estado</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($_SESSION['incidencias'] as $incidencia) {
                        echo '<tr>';
                        echo '<th scope="row">' . $incidencia['titulo'] .'</th>';
                        echo '<td>' . $incidencia['tipo'] .'</td>';
                        echo '<td>' . $incidencia['estado'] .'</td>';
                        echo '<td>' . $incidencia['prioridad'] .'</td>';
                        echo '<td>' . $incidencia['fecha_creacion'] .'</td>';
                        echo '<td>';
                        echo '<button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#VerIncidencia"><i class="fa-solid fa-eye"></i></button>';
                        echo '<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#BorrarIncidencia"><i class="fa-solid fa-trash"></i></button>';
                        echo "</td>";
                        echo '</tr>';
                    }
                ?>
            
            </tbody>
            </table>
        </div>
    
    </div>
    <?php include_once('footer.php'); ?>