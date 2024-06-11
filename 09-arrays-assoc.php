<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Pepe',
    'apellido' => 'Perez',

        'informacion' => [
        'edad' => 25,
        'telefono' => 123456789,
        'email' => 'pepe.com',
        'direccion' => 'calle falsa 123',
        'ciudad' => 'Madrid',
        'provincia' => 'Madrid',
        'pais' => 'España',
        
        'redes_sociales' => [
            'web' => 'www.pepe.com',
            'facebook' => 'www.facebook.com/pepe',
            'twitter' => 'www.twitter.com/pepe',
            'instagram' => 'www.instagram.com/pepe',
            'youtube' => 'www.youtube.com/pepe',

         'ropa' => [
            'camisa' => 'negra',
            'pantalon' => 'blanca',
            'zapatos' => [
               'marca' => 'nike',
                'color' => 'negro',
                'talla' => 42,
            
            ]
        ]
    ]   
]
            ];


    echo '<pre>';
    var_dump($cliente['informacion'] + ['redes_sociales']);
    echo '</pre>';

echo $cliente ['nombre'];
echo $cliente ['informacion'] ['zapatos'];


$cliente['codigo'] = 123123123123123123;

echo '<pre>';
var_dump($cliente);
echo '</pre>';

    include 'includes/footer.php';