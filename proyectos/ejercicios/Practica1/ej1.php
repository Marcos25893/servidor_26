<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla{
            border-collapse: collapse; 
            width: 50%;
            margin-left: auto; 
            margin-right: auto; 
            border: 1px solid blue
        }

        .tabla th, td{
            text-align: center;
            border: 1px solid blue
        }
    </style>
</head>
<body>
    <?php

        /*Vamos a crear un programa que calcule el IVA de un carrito de la compra. El
        carrito será un array bidimensional asociativo de este tipo: (Puedes añadir más
        productos y más campos a tu elección)
        $carrito = array(
        array(“id” => 1234, “nombre” => “PS4”, “precio” => 349.95, “cant” => 2, “iva_r” => 0),
        array(“id” => 1235, “nombre” => “iPhone XS”, “precio” => 1249.95, “cant” => 1, “iva_r” => 0),
        array(“id” => 1236, “nombre” => “Chocolate”, “precio” => 9.95, “cant” => 5, “iva_r” => 1)
        )
        Deberéis crear una función llamada subtotal($linea_pedido) que calcule el precio de
        cada línea de pedido, multiplicando el precio por la cantidad y aplicando el iva
        correspondiente, si iva_r es 0 será del 21% y si iva_r es 1 será del 10%.
        Mostrar en una tabla HTML el carrito de la compra (nombre, precio, cantidad y
        subtotal). En la última fila aparecerá el total del pedido a pagar.
        Se tendrá en cuenta la visualización y el estilo del carrito de la compra resultante.*/

        function subtotal($linea_pedido){

            $iva;
            if($linea_pedido["iva_r"] == 0){
                $iva = 1.21;
            }elseif($linea_pedido["iva_r"] == 1){
                $iva = 1.1;
            }

            return $total_linea = $linea_pedido["precio"] * $linea_pedido["cant"] * $iva;
        }

        $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
        );

        $total = 0;

        echo "<table border='1' class='tabla'>";
            echo "<tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>IVA</th>
                <th>Subtotal</th>
            </tr>";
            foreach($carrito as $linea_pedido){
                echo "<tr>
                    <td>" . $linea_pedido['id'] . "</td>
                    <td>" . $linea_pedido['nombre'] . "</td>
                    <td>" . $linea_pedido['precio'] . "</td>
                    <td>" . $linea_pedido['cant'] . "</td>
                    <td>" . $linea_pedido['iva_r'] . "</td>
                    <td>" . subtotal($linea_pedido). "</td>
                </tr>";
                $total = $total + subtotal($linea_pedido);
            }
            echo "<tr>
                <td colspan='5'>Total</td>
                <td>" . $total . "</td>
            </tr>";

        echo"</table>";

    ?>
</body>
</html>