<?php include_once('cabecera.php'); ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Tablas</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoProyecto">
                            Nuevo Proyecto
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#eliminarId">
                            Eliminar
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarTodo">
                            Eliminar todos
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin Prevista</th>
                                        <th>Días Transcurridos</th>
                                        <th>% Completado</th>
                                        <th>Importancia 1-5</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <?php
                                        $posicion=0;
                                        foreach($_SESSION['proyectos'] as $proyecto){
                                            echo "<tr>";
                                                echo "<td>" . $proyecto['id'] . "</td>";
                                                echo "<td>" . $proyecto['nombre'] . "</td>";
                                                echo "<td>" . $proyecto['fechaInicio'] . "</td>";
                                                echo "<td>" . $proyecto['fechaFinPrevista'] . "</td>";
                                                echo "<td>" . $proyecto['diasTranscurridos'] . "</td>";
                                                echo "<td>" . $proyecto['porcentajeCompletado'] . "%</td>";
                                                echo "<td>" . $proyecto['importancia'] . "</td>";
                                                echo "<td>";
                                                    echo "<a class='btn btn-success me-2' href='controlador.php?accion=verProyecto&id=" . $proyecto['id'] . "'><i class='fa-solid fa-eye'></i></a>";

                                                    echo "<a class='btn btn-danger' href='controlador.php?accion=delProyecto&posicion=" . $posicion . "'><i class='fa-solid fa-trash'></i></a>"; "</td>";
                                            echo "</tr>";
                                            $posicion++;
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
            

        </div>

    </div>


</div>

<?php include_once ('pie.php'); ?>
