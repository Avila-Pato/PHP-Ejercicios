<?php include 'includes/header.php';

// im_array = Buscar elementod de un arreglo
$carrito = ['Tablet', 'Computadora' ,'Television'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

echo "<br/>";
// Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<br/>";

echo "<prev>";
var_dump($numeros);
echo "</prev>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premiun',
    'nombre' => 'Juan'
);

echo "<br/>";

echo "<prev>";
var_dump($cliente);
echo "</prev>";

asort($cliente); //Ordenar por valores (orden alfabetico)
arsort($cliente); // Ordenar por valores (Z primero)
ksort($cliente); // Ordenar por llaves (orden alfabetico)
krsort($cliente); // ordena por llaves (orden alfabetico, de la Z a la A);


echo "<br/>";

echo "<prev>";
var_dump($cliente);
echo "</prev>";


include 'includes/footer.php';