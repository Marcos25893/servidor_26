<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        echo "Hola, mundo. Estamos en proyectos/index.php";
    ?>

    <p>esto no esta dentro de PHP</p>

    <?= "Hola, mundo. Estamos en proyectos/index.php" ?>

    <?php
        //Otra forma de hacerlo

        if ($numero > 3) {
    ?>
            <p>El número es mayor que 3</p>
    <?php
        } else {
    ?>
            <p>El número es menor o igual que 3</p>
    <?php
        }
    ?>

    <p>esto no esta dentro de PHP</p>

    <?php
        //$variable = "Hola mundo con variable";
        $numero = 5;

        if ($numero > 3) {
            echo "<p>El número es mayor que 3</p>";
        } else {
            echo "<p>El número es menor o igual que 3</p>";
        }

        echo "<p>esto no esta dentro de PHP</p>" . ($numero + 10); // Se usa el punto para concatenar

        //Para hacer comentarios dos barras // o con /* comentario */

        //devilmente tipado
        $variable = "5"; //String
        $variable = $variable + 10; //Se convierte a número
        echo "<p>" . $variable . "</p>";
        $variable = "Lo que me de la gana";
        echo "<p>" . $variable . "</p>";

        var_dump($variable); //Muestra el tipo de dato y su valor

        $condicion = true; //false
        var_dump($condicion);

        //CADENAS
        //Se pueden usar las dos comillas o las comillas simples
        $cadena = "Hola";
        $cadena2 = 'Hola';

        echo '<br><a href="http://www.google.com">Google</a>'; //Comillas simples
        echo "<br><a href='http://www.google.com'>Google</a>"; //Comillas dobles
        
    ?>

    


</body>

</html>