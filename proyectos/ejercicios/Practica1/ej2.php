<!--Vamos a crear una librería online, pero con los libros almacenados en un array
    asociativo. Los datos a guardar por cada libro son: ISBN, título, descripción,
    categoría, editorial, foto, precio.
    - La categoría puede ser: ciencias, cocina, deporte, novela, historia, scifi,
    negra, romántica.
    - El campo foto será una url en tu pc en la misma carpeta que esté el fichero
    php nos crearemos una carpeta imgs donde meteremos las imágenes de
    cada libro llamándolas con el isbn.jpg. El tamaño de cada imagen será
    aproximadamente 100x150px.
    - ISBN será un número de trece dígitos que se puede tratar como una
    cadena.
    - Precio será un float con dos decimales.
    A continuación, te muestro cómo debería quedar la visualización del array. Tienes que
    intentar que sea lo más parecido posible. Como mínimo deberás tener 15 libros, y
    mostrar 4 libros en cada fila. Los datos e imágenes de los libros deben ser lo más
    reales posible. Debes tener como mínimo 5 libros de novela histórica y 5 de novela
    negra, pero sólo mostraremos los 4 primeros de cada una de esas categorías.
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            margin: 0;
            background-color:#FFFDD0;
        }
        img{
            width: 100px;
            height: 150px;
        }

        .cuerpo{
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            margin-left: 80px;
            
        }

        .libro{
            flex: 0 0 22%;
            border: solid 1px black;
            text-align:center;
            padding: 10px;
            margin-right:15px;
            
        }

        .genero{
            text-align:center;
            color: purple;
            font-size: 25px;
            margin-top:70px;
        }

        .precio{
            color: red;
        }

        .footer{
            margin-top: 30px;
            background-color:black;
            color:white;
            text-align:center;
            height: 50px;

        }
    </style>
</head>
<body>

    <h1>Librería Jaroso</h1>

    <p></p>

    
    <?php

    $libros = [
        [
            "isbn" => "9781234567894",
            "titulo" => "El imperio olvidado",
            "descripcion" => "Novela histórica ambientada en la antigua Roma.",
            "categoria" => "Novela Histórica",
            "editorial" => "Editorial Alfa",
            "foto" => "ej2img/Imperio_Olvidado.jpg",
            "precio" => 22.00
        ],
        [
            "isbn" => "9781234567895",
            "titulo" => "La reina de Castilla",
            "descripcion" => "Dramas y pasiones en la corte medieval.",
            "categoria" => "Novela Histórica",
            "editorial" => "Editorial Alfa",
            "foto" => "ej2img/reina_Castilla.jpg",
            "precio" => 18.75
        ],
        [
            "isbn" => "9781234567896",
            "titulo" => "Los caballeros del rey",
            "descripcion" => "Aventuras en tiempos de reyes y guerras.",
            "categoria" => "Novela Histórica",
            "editorial" => "Editorial Alfa",
            "foto" => "ej2img/caballeros_rey.jpg",
            "precio" => 21.50
        ],
        [
            "isbn" => "9781234567897",
            "titulo" => "Sangre y corona",
            "descripcion" => "Intrigas palaciegas y batallas épicas.",
            "categoria" => "Novela Histórica",
            "editorial" => "Editorial Alfa",
            "foto" => "ej2img/corona_sangre.jpeg",
            "precio" => 19.00
        ],
        [
            "isbn" => "9781234567898",
            "titulo" => "El legado de los vikingos",
            "descripcion" => "Exploración de la era vikinga en Europa.",
            "categoria" => "Novela Histórica",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/legado_vikingos.jpg",
            "precio" => 23.99
        ],
        [
            "isbn" => "9781234567899",
            "titulo" => "Ciudad sin ley",
            "descripcion" => "Un detective entre la corrupción y el crimen.",
            "categoria" => "Novela Negra",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/ciudad.jpg",
            "precio" => 15.00
        ],
        [
            "isbn" => "9781234567800",
            "titulo" => "Noche oscura",
            "descripcion" => "Misterios y asesinatos en una ciudad gris.",
            "categoria" => "Novela Negra",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/noche_oscura.jpg",
            "precio" => 14.99
        ],
        [
            "isbn" => "9781234567801",
            "titulo" => "El susurro del asesino",
            "descripcion" => "Thriller psicológico que mantiene en vilo.",
            "categoria" => "Novela Negra",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/susurro_asesino.jpg",
            "precio" => 16.75
        ],
        [
            "isbn" => "9781234567802",
            "titulo" => "Pactos oscuros",
            "descripcion" => "Una red de mentiras y violencia.",
            "categoria" => "Novela Negra",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/pacto_diablo.jpg",
            "precio" => 17.20
        ],
        [
            "isbn" => "9781234567803",
            "titulo" => "Callejón sin salida",
            "descripcion" => "Un caso sin resolver que lo cambia todo.",
            "categoria" => "Novela Negra",
            "editorial" => "Editorial Beta",
            "foto" => "ej2img/callejon_salida.jpg",
            "precio" => 18.50
        ]

        ];

    $genero = "";
    $contador=0;
    
    foreach($libros as $libro) {
        
        if($genero == ""){
            $genero = $libro['categoria'];
            echo "<div class='genero'>";
                echo "<h2>" . $libro['categoria'] . "</h2>";
            echo "</div>";
            echo "<div class=cuerpo>";
        }
        
        if($libro['categoria']!=$genero){
            echo "</div>";
            echo "<div class='genero'>";
                echo "<h2>" . $libro['categoria'] . "</h2>";
            echo "</div>";
            echo "<div class=cuerpo>";
            $contador=0;
        }
            if($contador<4){
                echo "<div class='libro'>
                    <img src=" . $libro['foto'] . " alt=" . $libro['titulo'] . ">
                    <p>" . $libro['descripcion'] . "</p><br>
                    <p><strong>" . $libro['editorial']. "</strong></p><br>
                    <p class='precio'>" . $libro['precio'] . "€</p>
                </div>";
                $contador++;
            }
            $genero = $libro['categoria'];
                
    }
            echo "</div>";

            echo "<div class=footer>";
                echo "<p>Realizado por Marcos</p>";
            echo "</div>";
?>
</body>
</html>