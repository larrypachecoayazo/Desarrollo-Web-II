<?php


// Definición de variables
$variable = "Esto imprime una variable";

// 
$titulo = "Hola mundo";


// Imprimir variable
echo $variable;

// Otra variable
$parrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores soluta quos aspernatur vero necessitatibus molestiae et quia nostrum reprehenderit assumenda, suscipit illo dolorem delectus esse iure quas ipsam distinctio nihil?";


// 
// Imprimir variable con HTML concatenada
// El operador de concatenación es el punto (.)
// 
echo "<H1>" . $titulo . "</H1>" ;
echo "<P>" . $parrafo . "</P>" ;


// Linea horizontal
echo "<hr>";
echo "<H2> Matrices </H2>";


// Definición de matrices
$matriz1 = ["LUNES", "MARTES", "MIERCOLES", 100, true];

// Imprimir una matriz
print_r($matriz1);

// Imprimir una matriz
var_dump($matriz1);


// Matriz asociativa
$matriz2 = [
    'lunes' => 'Lorica',
    'martes' => 'Monteria',
    'miercoles' => 'Sahagun',
    'jueves' => 'Montelibano',
];


// Preformatear matriz

echo "<pre>";
print_r($matriz2);
echo "</pre>";


// Agregar elemento a matriz
$matriz2["viernes"] = "Planeta Rica";


// Imprimir elemento adicionado
echo "<pre>";
print_r($matriz2);
echo "</pre>";




// Linea horizontal
echo "<hr>";
echo "<H2> Objetos </H2>";

// Definición de Objetos

$object1 = new stdClass();
$object1->pwcid = "P0002323";
$object1->username = "lpacheco";
$object1->token = "rtyufid64jfjghr647rffuh48";



echo "<pre>";
print_r($object1);
echo "</pre>";

var_dump($object1);



// Agregar objeto a matriz
echo "<h3>Matriz con un elemento tipo objeto</h3>";

$matriz2['data'] = $object1;

echo "<pre>";
print_r($matriz2);
echo "</pre>";

var_dump($matriz2);



// Recorrer los elementos de una matriz
echo "<h3>Recorrer los elementos de una matriz</h3>";

// Imprimir los elementos de una matriz (ciclos)
foreach ($matriz1 as $key => $value) {
    echo "Posición: " . $key . " Valor: " . $value . "<br>";
}



// Funciones
echo "<h3>Funciones</h3>";

function imprimirArray($array){
    foreach ($array as $key => $value) {
        echo "Pos[" . $key . "] = " . $value . "<br>";
    }
}

imprimirArray($matriz1);