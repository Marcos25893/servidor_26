<?php include 'cabezera.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tablas</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabla Empleados</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <?php
                                        foreach($_SESSION['proyectos'] as $proyecto){
                                            echo "<tr>";
                                                echo "<td>" . $proyecto['name'] . "</td>";
                                                echo "<td>" . $proyecto['position'] . "</td>";
                                                echo "<td>" . $proyecto['office'] . "</td>";
                                                echo "<td>" . $proyecto['age'] . "</td>";
                                                echo "<td>" . $proyecto['start_date'] . "</td>";
                                                echo "<td>" . $proyecto['salary'] . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<?php include_once 'pie.php'; ?>
