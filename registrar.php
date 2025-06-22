<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sss", $nombre, $email, $password);
$stmt->execute();

echo "Registro exitoso";
?>