<?php include 'cabezera.php'; ?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Tablas</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <button type="button" class="btn btn-primary btn-sm mb-2 me-2" data-bs-toggle="modal" data-bs-target="#nuevoProyecto">
                            Nuevo Proyecto
                        </button>
                        <button type="button" class="btn btn-warning btn-sm mb-2 me-2" data-bs-toggle="modal" data-bs-target="#eliminarId">
                            Eliminar
                        </button>
                        <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#eliminarTodo">
                            Eliminar todos
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Salary</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <?php
                                        $posicion=0;
                                        foreach($_SESSION['proyectos'] as $proyecto){
                                            echo "<tr>";
                                                echo "<td>" . $proyecto['id'] . "</td>";
                                                echo "<td>" . $proyecto['name'] . "</td>";
                                                echo "<td>" . $proyecto['position'] . "</td>";
                                                echo "<td>" . $proyecto['office'] . "</td>";
                                                echo "<td>" . $proyecto['age'] . "</td>";
                                                echo "<td>" . $proyecto['salary'] . "</td>";
                                                echo "<td>";
                                                    echo "<a class='btn btn-success me-2' href='controlador.php?accion=verProyecto&dni=" . $proyecto['id'] . "'><i class='fa-solid fa-eye'></i></a>";

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

<?php include_once 'pie.php'; ?>
