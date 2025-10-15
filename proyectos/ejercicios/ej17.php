<?php
    /*Crear un array llamado $word_list_en con 50 palabras en inglés. Crea otro
    array llamado $word_list_es con las mismas 50 palabras en el mismo orden,
    pero en español. El ejercicio consiste en hacer un traductor literal de español
    a inglés o viceversa, debe recorrer una cadena de texto y devolverla en el
    idioma traduciendo una por una las palabras (se supone que están en la misma
    posición en los arrays).*/

    $word_list_en = [
        "house", "car", "tree", "water", "sun", "moon", "computer", "book", "pen", "phone",
        "table", "chair", "window", "door", "school", "teacher", "student", "city", "country", "mountain",
        "river", "ocean", "animal", "bird", "fish", "dog", "cat", "food", "bread", "milk",
        "cheese", "fruit", "vegetable", "meat", "coffee", "tea", "sugar", "salt", "butter", "egg",
        "family", "friend", "love", "music", "movie", "game", "work", "money", "time", "day"
    ];

    $word_list_es = [
        "casa", "auto", "árbol", "agua", "sol", "luna", "computadora", "libro", "bolígrafo", "teléfono",
        "mesa", "silla", "ventana", "puerta", "escuela", "maestro", "estudiante", "ciudad", "país", "montaña",
        "río", "océano", "animal", "pájaro", "pez", "perro", "gato", "comida", "pan", "leche",
        "queso", "fruta", "verdura", "carne", "café", "té", "azúcar", "sal", "mantequilla", "huevo",
        "familia", "amigo", "amor", "música", "película", "juego", "trabajo", "dinero", "tiempo", "día"
    ];

    $palabra = 'love';

    $posicion = array_search($palabra, $word_list_en);
    if($posicion == true){
        echo "La traducion de la palabra " . $palabra . " es: " . $word_list_es[$posicion]; 
    }else{
        $posicion = array_search($palabra, $word_list_es);
        if($posicion == true){
            echo "La traducion de la palabra " . $palabra . " es: " . $word_list_en[$posicion]; 
        }else {
            echo "La palabra " . $palabra . " no existe en el diccionario";
        }
    }

?>