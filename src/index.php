<?php
$host = 'db';
$database = 'holamundo';
$user = 'appuser';
$password = 'app123';

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $user,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>La aplicación PHP está funcionando.</p>";
    echo "<p>Conexión a MySQL exitosa.</p>";

} catch (PDOException $e) {
    http_response_code(500);
    echo "<h1>Error de conexión</h1>";
    echo "<p>No se pudo conectar a la base de datos.</p>";
}
?>