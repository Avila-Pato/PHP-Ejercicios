<?php include 'includes/header.php';

$clientes = [];
$clientes2= array();
$clientes3= array('pedro','juan','kareb');
$cliente = [
    'nombre' => 'pedro',
    'edad' => 20,
    'ciudad' => 'barcelona'
];

//Empty - Revisa si un arreglo esta creado o una propiedad esta definida

var_dump(empty($clientes3));
var_dump(empty($clientes2));
var_dump(empty($cliente['nombre']));
var_dump(empty($cliente['edad']));
var_dump(empty($cliente['ciudadades']));


//Isset - Revisa si un arreglo esta creado o una propiedad esta definida
echo "<br/>";
var_dump(isset($clientes3));
var_dump(isset($clientes2));
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['edad']));
var_dump(isset($cliente['ciudadades']));

//Isset - permite revisar si una propiedad de un arrelo asociativo existe


echo "<br/>";
var_dump( isset($cliente['edad']));
var_dump( isset($cliente['ropa']));

include 'includes/footer.php';