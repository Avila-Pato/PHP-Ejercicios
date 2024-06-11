<?php include 'includes/header.php';

$NombreCliente = "Patricio Avila";

//Conocer extension de un strig
echo strlen($NombreCliente );
var_dump($NombreCliente);

echo "<br/>";
//Eliminar espacion en blanco
$text = trim( $NombreCliente ); // "      Patricio Avila         "
echo strlen($text);

echo "<br/>";
//Convertirlo a mayuscuas
echo strtoupper($NombreCliente);

echo "<br/>";
//Convertirlo a minusculas
echo strtolower($NombreCliente);

echo "<br/>";
$email1 = "email@correo.com";
$email2 = "Email@correo.com";
//Comparar si son iguales
var_dump($email1 == $email2);
echo "<br/>";
//Comparar si son diferentes
var_dump($email1 != $email2);



var_dump(strtolower($email1) === strtolower($email2));
echo "<br/>";
echo str_replace('Patricio', 'P', $NombreCliente);

// revisar si un string existe o no
echo strpos($NombreCliente, 'Patricio');

echo "<br/>";

$tippClliente = "Premiun";

echo "<br/>";

echo "El cliente"  . $NombreCliente. " es " . $tippClliente;

echo "<br/>";

echo "El cliente $NombreCliente es $tippClliente";

include 'includes/footer.php';