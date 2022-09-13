<?php

/**
 * Iniciar servidor de pruebas
 * php -S localhost:8000
 */
 
// Content-type=application/x-www-form-urlencoded
// Content-type=application/multipart/form-data

// Conexión a la base de datos
try {
    $mbd = new PDO('mysql:host=localhost;dbname=desarrollo_web', 'local', 'local$$123');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


// Ejecución de la consulta
try 
{    
    // Creamos una sentencia preparada
    $statement=$mbd->prepare("INSERT INTO usuarios (identificaciosn, nombres, apellidos, email) VALUES (:ide, :nom, :ape, :ema)");

    // Asociamos los parametros de la consulta a las variables de los datos
    $statement->bindParam(':ide', $identificacion);
    $statement->bindParam(':nom', $nombres);
    $statement->bindParam(':ape', $apellidos);
    $statement->bindParam(':ema', $email);    

    // Asignamos los datos de las variables
    $identificacion = $_POST['identificacion'];
    $nombres        = $_POST['nombres'];
    $apellidos      = $_POST['apellidos'];
    $email          = $_POST['email'];

    // Insertar
    $statement->execute();
  
    // Retornamos resultados
    header('Content-type:application/json;charset=utf-8');    
    echo json_encode([
        'persona' => $_POST
    ]);

} catch (PDOException $e) {
    header('Content-type:application/json;charset=utf-8');    
    echo json_encode([
        'error' => [
            'codigo' =>$e->getCode() ,
            'mensaje' => $e->getMessage()
        ]
    ]);
}


?>

