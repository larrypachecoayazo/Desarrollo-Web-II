<?php

/**
 * Iniciar servidor de pruebas
 * php -S localhost:8000
 */
 

 // Parámetros por URL
 // http://localhost:8000/sesion2/get.php?param1=10774823&param2=1020


// echo "Primer parámetro: " . $_GET['param1'];

// echo "<br><br>";

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";


// Conexión a la base de datos
try {
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web', 'local', 'local$$123');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


$id = $_GET['id'];

// Ejecución de la consulta
try {    
    // Creamos una sentencia preparada
    $statement=$mbd->prepare("SELECT * from usuarios WHERE id = ?");

    // Asociamos los parametros
    $statement->bindParam(1, $_GET['id']);

    // Ejecuto la sentencia preparada
    $statement->execute();

    // Obtengo todos los datos en un array
    $results = $statement->fetch(PDO::FETCH_ASSOC);

    // Desconexión de la base de datos
    $mbd = null;
    
    // Retorno resultados
    header('Content-type:application/json;charset=utf-8');
    echo json_encode([
        'persona' => $results
    ]);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

