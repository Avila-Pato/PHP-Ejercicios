<?php include 'includes/header.php';


//While

$i = 100;
     while($i <10) {
        echo $i . "<br/>";
        $i++;
     }
     echo "<br/>";
    
     // Do While

//Do While

$i = 0;

do {
    echo $i . "<br/>";
    $i++;
}while($i < 10);

// Foor loop

/*
    3 imprimir Fizz
    imprimir buzz
    3 y 5 imprimir FIZZ BUZZ

*/

// for ($i = 1; $i < 51; $i++) {
//     if($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . " -- FIZZ BUZZ <br/>";
//     }else if ($i % 3 === 0) {
//         echo $i . " -- FIzz <br/>"; 
//     }else if ($i % 5 == 0) {
//         echo $i . " -- Buzz <br/>";
//     }else {
//         echo $i . "<br/>";
//     }
// }


// for each

$clientes = array('Pedro', 'Juan','Karen');

foreach ( $clientes as $cliente ) {
    echo $cliente . '<br/>';
}
$cliente = [
    'nombre' => 'juan',
    'saldo' => 200,
    'tipo' => 'Premiun'
];

foreach ( $cliente as $key => $valor) {
    echo $key . " - " . $valor . '<br/>';
}



include 'includes/footer.php';