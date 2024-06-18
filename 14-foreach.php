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
foreach( $productos as $producto) {
    echo "<pre>
    var_dump($producto)
    </pre>";
};

include 'includes/footer.php';