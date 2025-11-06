<?php include_once('header.php'); ?>
<body class="bg-primary">

<div  class="d-flex justify-content-center mt-5" style="height: 100vh;">
<div class="d-flex justify-content-center bg-light pt-5" style="width: 800px; height: 40vh;">
        <div>
            <img src="./img/logo.png" alt="" width="300px">
        </div>

        <div class="ms-5">
            <form action="controlador.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="nombre" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Crear Cuenta" name="crear">
            <a href="login.php" class="btn btn-success">Ya tengo Cuenta</a>
            </form>

           
        </div>
</div>
</div>

<?php include_once('footer.php'); ?>