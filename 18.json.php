<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisor',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisor curvo',
        'precio' => 800,
        'disponible' => false
    ],   
];


echo "<prev>";

var_dump($productos);
echo "<br/>";
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
echo "<br/>";

$json_array = json_decode($json);
echo "<br/>";

var_dump($json);
echo "<br/>";
var_dump($json_array);
echo "<br/>";
echo "</prev>";


include 'includes/footer.php';