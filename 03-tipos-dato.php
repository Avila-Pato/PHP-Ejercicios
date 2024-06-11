<?php include 'includes/header.php';

// Boleanos
$logueado = true; 
var_dump($logueado);
//Enteros
$numero = 200;
var_dump($numero);
//Floats
$decimal = 20.5;
var_dump($decimal); 
//Cadenas = strigns
$texto = "Hola";
var_dump($texto);
$array = [];
var_dump($array);
//Arreglos
$arreglo = array(1,2,3,4,5);
var_dump($arreglo);
//Objetos
$objeto = new stdClass();
var_dump($objeto);
//Funciones
function saludar(){
    echo "Hola";
}
saludar();

//Condicionales
if($logueado == true){
    echo "Bienvenido";
}else{
    echo "No estas logueado";
}



include 'includes/footer.php';