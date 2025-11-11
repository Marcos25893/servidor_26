<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/fontawesome.css">
    <link href="./assets/css/solid.css" rel="stylesheet" />
</head>
<body>
    
</body>
</html>
<body class="bg-primary">

<div  class="d-flex justify-content-center mt-5" style="height: 100vh;">
<div class="d-flex justify-content-center bg-light pt-5" style="width: 800px; height: 40vh;">
        <div>
            <img src="./img/logo.png" alt="" width="300px">
        </div>

        <div class="ms-5">
            <form action="controlador.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password">
            </div>
            <a href="register.php" class="btn btn-warning">Crear Cuenta</a>
            <input type="submit" class="btn btn-primary" value="Enviar" name="enviar">
            
            </form>
        </div>

</div>
</div>

<?php include_once('footer.php'); ?>