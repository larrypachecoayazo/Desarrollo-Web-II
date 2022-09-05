<?php


function retornarJSON($datos){
    header('Content-type:application/json;charset=utf-8');
    echo json_encode($datos);
}

$object1 = new stdClass();
$object1->pwcid = "P0002323";
$object1->username = "lpacheco";
$object1->token = "rtyufid64jfjghr647rffuh48";

$array2 = [
    'lunes' => 'Lorica',
    'martes' => 'Monteria',
    'miercoles' => 'Sahagun',
    'jueves' => 'Montelibano',
    'data' => $object1
];
$array3 = [
    'identifcación' => 10774835,
    'nombre' => "Larry Pacheco Ayazo",
    'asignaturas' => ['Desarrollo Web I', 'Desarrollo Web II'],
    'datos' => $array2
];

$matriz2 = [
    'lunes' => 'Lorica',
    'martes' => 'Monteria',
    'miercoles' => 'Sahagun',
    'jueves' => 'Montelibano',
];


// Realizar el ejercicio con un cliente REST
// Firefox RESTer

retornarJSON($array3);