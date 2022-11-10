<?php include 'includes/header.php';

$carrito =['Tablet', 'Television', 'Computadora'];

//Acceder a un elemento del array
echo $carrito[2];

//Anade un elemento en el indice 3 del carrito
$carrito[3] = 'Nuevo Producto...';

//Anadir un elemento nuevo al final
array_push($carrito, 'Audifinos');

//Anadir un elemento al inicio
array_unshift($carrito, 'Smartwatch');

//Util para ver contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';