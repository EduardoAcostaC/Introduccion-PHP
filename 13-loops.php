<?php include 'includes/header.php';

// while
$i = 0; //Iniciador

while( $i < 10 ){
    echo $i . "<br>";
    $i++; //Incremento
}

echo "<br>";

//Do While
$i = 0;

do{
    echo $i . "<br>";
    $i++; //Incremento
} while($i < 10);

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir FFIZZ BUZZ
 */


//For Loop
// echo "<br>";
// for ($i = 1; $i < 100; $i++){
//     if($i % 3 === 0 && $i % 5 ===0){
//         echo $i . "-FIZZ BUZZ ";
//         echo "<br>";
//     }
//     else if($i % 3 === 0){
//         echo $i . "-Fizz ";
//         echo "<br>";
//     }
//     else if($i % 5 === 0) {
//         echo $i . "-Buzz";
//         echo "<br>";
//     }
//     else {
//         echo $i . "<br>";
//     }
// }

//For Each Loop
$clientes = array('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente){
    echo $cliente. "<br/>";
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor):
    echo $key. "-" . $valor . "<br>";
endforeach;

include 'includes/footer.php';