<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asignar datos del POST a variables
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pelicula = $_POST['pelicula'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];

    // Aquí podrías conectar con una base de datos y guardar estos datos

    // Redirigir a una página de confirmación
    header("Location: confirmacion_reserva.html");
    exit();
}
?>

