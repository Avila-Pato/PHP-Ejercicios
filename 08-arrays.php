<?php include 'includes/header.php';

$carrito = ['Tablet', 'Auto', 'Televisor', 'Reloj', 'anillo'];

// Útil para previsualizar los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento de un array
echo $carrito[0] . "<br>";
echo $carrito[1] . "<br>";
echo $carrito[2] . "<br>";

// Añade un elemento en el arreglo según el índice que le estemos aplicando
$carrito[5] = 'Nuevo Producto...';
// Añade un elemento al final del array
array_push($carrito, 'F');
// Añade un nuevo producto al principio del array
array_unshift($carrito, 'N');

// Útil para ver los elementos del array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array ('Clietne 1', 'Clietne 2');
echo "<pre>";
var_dump($clientes);
echo "</pre>";
echo $clientes[0];

include 'includes/footer.php';
?>
