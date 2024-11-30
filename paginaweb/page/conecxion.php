<?php
$servername = "localhost";  // Servidor de base de datos, en XAMPP siempre es localhost
$username = "root";         // Usuario de MySQL (en XAMPP es root por defecto)
$password = "";             // Contraseña (vacía por defecto en XAMPP)
$dbname = "paginaweb";      // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
?>