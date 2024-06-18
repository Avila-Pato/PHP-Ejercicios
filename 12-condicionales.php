<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenficado correctamente";
}else {
    echo "Usuario no autentificado, inicia sesion";
}

// if anidados....
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'Informacion' => [
        'Tipo' => 'Premiun'
    ]
    ];

    echo "<br>";

if(!empty($cliente) ) {
    echo " El arreglo del cliente no esta vacio";
if($cliente['saldo'] > 0 ) {
    echo "El cliente tiene saldo disponible";
}else {
    echo "No hay saldo";
}
}

echo "<br>";
// else if
if ($cliente['saldo'] > 0) {
   echo "El clinete tiene saldo";
}else if ($cliente['informacion']['tipo'] === 'Premiun') {
    echo "El cliente es Premiun";
}else {
    echo "No hay cliente definido";
}


// Switch
echo "<br>";
$tecnologia = 'HTMasL';

switch ($tecnologia) {
    case 'HTML';
    echo "PHP, lenguaje programacion";
    break;
    case 'JAVASCRIPT';
    echo "PHP, lenguaje programacion";
    break;
    case 'PYTHON';
    echo "PHP, lenguaje programacion";
    break;
    
    default: 
    echo "Este no es un lenguaje de programacion";
    
}









include 'includes/footer.php';