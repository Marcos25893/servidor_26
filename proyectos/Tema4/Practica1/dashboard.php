<?php include_once('header.php'); ?>
<body>
    

    
    <div class="d-flex justify-content-between bg-primary" style="width: 100vw; height: 10vh;">
            <div class="ps-2">
                <img src="./img/logo.png" alt="" width="100vw">
            </div>

            <div class="pt-3">
                
            </div>

            <div class="dropdown pe-2 pt-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['email'];?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="controlador.php?accion=logout">Cerrar Sesión</a></li>
                </ul>
            </div>

    </div>

    <div  class="d-flex">
        <div class="bg-info p-2 text-dark bg-opacity-10" style="width: 10vw; height: 90vh;"></div>

        <div class="m-4" style="width: 90vw; height: 90vh;">
            <h1 class="text-center">Gestor de Incidencias</h1>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Título</th>
                <th scope="col">Tipo</th>
                <th scope="col">Estado</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Fecha de Creación</th>
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
                        echo '</tr';
                    }
                ?>
            
            </tbody>
            </table>
        </div>
    
    </div>
    <?php include_once('footer.php'); ?>