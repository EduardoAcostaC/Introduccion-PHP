<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

//Conocer extension de string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir texto a mayusculas
echo strtoupper($nombreCliente);

//Convertir texto a minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Juan');

$tipoCliente = "Premium";

//Concatenar
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "El cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';