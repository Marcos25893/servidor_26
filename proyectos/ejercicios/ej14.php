<?php

/*14. Crea un array de notas de alumnos. Cada elemento del array debe contener las
notas de un alumno, incluyendo nombre, materia y nota. Haz un programa con 10
notas de alumnos. Luego debes mostrar las notas ordenadas en orden
descendente por alumno, luego ordenadas por nombre, luego mostrar la nota
media del curso, y el número de alumnos suspensos.*/




$notas = [
    ['nombre' => 'Ana', 'materia' => 'Matemáticas', 'nota' => 8.5],
    ['nombre' => 'Luis', 'materia' => 'Física', 'nota' => 6.7],
    ['nombre' => 'María', 'materia' => 'Química', 'nota' => 9.2],
    ['nombre' => 'Carlos', 'materia' => 'Historia', 'nota' => 5.4],
    ['nombre' => 'Sofía', 'materia' => 'Lengua', 'nota' => 7.8],
    ['nombre' => 'Pedro', 'materia' => 'Matemáticas', 'nota' => 4.3],
    ['nombre' => 'Elena', 'materia' => 'Física', 'nota' => 8.9],
    ['nombre' => 'Jorge', 'materia' => 'Química', 'nota' => 6.1],
    ['nombre' => 'Lucía', 'materia' => 'Historia', 'nota' => 7.2],
    ['nombre' => 'Marta', 'materia' => 'Lengua', 'nota' => 9.0]
];


array_multisort(array_column($notas, 'nota'), SORT_DESC, $notas);
pintar($notas);


array_multisort(array_column($notas, 'nombre'), SORT_ASC, $notas);
pintar($notas);

$total = 0;
foreach ($notas as $nota) {
    $total += $nota["nota"];
}
$media = $total / count($notas);

$media = array_sum(array_column($notas, 'nota')) / count($notas);
echo "La media es " . $media;


$contador = 0;
$calificaciones = array_column($notas, 'nota');
foreach ($calificaciones as $calif) {
    if ($calif < 5)
        $contador++;
}

echo "Número de suspensos " . $contador;
?>