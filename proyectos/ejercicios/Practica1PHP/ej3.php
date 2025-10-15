<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar bg-body-tertiary">
    <form class="container-fluid">
      <div class="d-flex justify-content-between align-items-center w-100 mt-3">
        <div>
          <img src="./ej3img/logo.jpg" alt="logo" height="80">
        </div>
        <div>
          <a href="https://diablo3.blizzard.com/es-es/" class="btn btn-outline-danger me-2" type="button">Iniciar Sesión</a>
          <a href="https://eu.shop.battle.net/es-es/product/diablo-iii#optLogin=true" class="btn btn-outline-success me-2" type="button">Comprar</a>
          <a href="https://diablo3.blizzard.com/es-es/" class="btn btn-sm btn-outline-secondary" type="button">Probar Gratis</a>
        </div>
      </div>
    </form>
  </nav>

  <div class="flex-shrink-0 p-3 bg-dark bg-opacity-50">

    <div class="container text-center">
        <div class="row">

  <?php

    $jugadores = array(
      "jugador1" => array(
          "nombre" => "Barbaro",
          "vida" => 1500,
          "url" => "./ej3img/barbaro.webp",
          "desc" => "Un feroz guerrero que utiliza la fuerza bruta para aplastar a sus enemigos.",
          "habilidades" => array("Whirlwind", "Leap", "Bash"),
          "imagen" => "./ej3img/habbarbaro.png"
      ),

      "jugador2" => array(
          "nombre" => "Hechicera",
          "vida" => 900,
          "url" => "./ej3img/hechicera.jpeg",
          "desc" => "Controla el poder de los elementos para destruir a sus enemigos.",
          "habilidades" => array("Fireball", "Ice Bolt", "Teleport"),
          "imagen" => "./ej3img/habhechicera.png"
      ),

      "jugador3" => array(
          "nombre" => "Nigromante",
          "vida" => 1000,
          "url" => "./ej3img/nigromante.webp",
          "desc" => "Invoca muertos vivientes y usa magia oscura para controlar el campo de batalla.",
          "habilidades" => array("Raise Skeleton", "Bone Spear", "Corpse Explosion"),
          "imagen" => "./ej3img/habnicro.png"
      ),

      "jugador4" => array(
          "nombre" => "Paladín",
          "vida" => 1200,
          "url" => "./ej3img/paladin.jpg",
          "desc" => "Guerrero sagrado que usa habilidades defensivas y ofensivas.",
          "habilidades" => array("Holy Shield", "Zeal", "Smite"),
          "imagen" => "./ej3img/habpala.png"
      ),

      "jugador5" => array(
          "nombre" => "Cazador de Demonios",
          "vida" => 850,
          "url" => "./ej3img/cazador.webp",
          "desc" => "Especialista en ataques a distancia y trampas contra demonios.",
          "habilidades" => array("Multi-Shot", "Caltrops", "Vault"),
          "imagen" => "./ej3img/habcaza.png"
      ),

      "jugador6" => array(
          "nombre" => "Monje",
          "vida" => 1100,
          "url" => "./ej3img/monje.jpeg",
          "desc" => "Guerrero ágil que combina artes marciales y magia espiritual.",
          "habilidades" => array("Fists of Thunder", "Seven-Sided Strike", "Sweeping Wind"),
          "imagen" => "./ej3img/habmonje.png"
      ),

      "jugador7" => array(
          "nombre" => "Mago",
          "vida" => 950,
          "url" => "./ej3img/mago.webp",
          "desc" => "Maestro de la magia arcana que usa hechizos devastadores.",
          "habilidades" => array("Magic Missile", "Arcane Orb", "Teleport"),
          "imagen" => "./ej3img/habmago.jpeg"
      )
    );

   
    

    foreach($jugadores as $clave => $valor ){
      echo '<div class="col">';

      echo '<div class="card" style="width: 18rem; margin-bottom:30px;">
        <img src=' . $valor["url"] . ' class="card-img-top" alt="..." style="height: 500px">
        <div class="card-body">
          <h5 class="card-title">' . $valor["nombre"] . '</h5>
          <p class="card-text">' . $valor["desc"] . '</p>
        </div>';
/*
        echo '<h5 class="card-title"> Habilidades </h5>';
        foreach($valor["habilidades"] as $hab){
          echo '<ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center justify-content-between">' . $hab . ' <img src="./ej3img/habilidad.png" alt="habilidad" height="40" gap="30"></li>
          </ul>';
        }
*/
        echo '<h5 class="card-title"> Habilidades </h5>';
        foreach($valor["habilidades"] as $hab){
          echo '<ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center justify-content-between">' . $hab . 
            '<img src="' . $valor["imagen"] .'" alt="habilidad" height="40"> </li>
          </ul>';
        }
      echo '</div>
      </div>';

    }

  ?>
  </div>
  </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>