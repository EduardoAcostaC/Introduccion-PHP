<?php include 'includes/header.php';

// in_array - buscar elementos en un carrito
$carrito = ['Tablet', 'Television', 'Computadora'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifinos', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,5,4,8,5,6);
sort($numeros);
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por valores (numeros - orden alfabetico)
arsort($cliente); //Ordena por valores (orden alfabetico inverso - numeros)
ksort($cliente); //Ordenar por llaves (orden alfabetico)
krsort($cliente); //Orden por llaves (orden alfabetico inverso)


echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';