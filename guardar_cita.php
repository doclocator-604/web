<?php
// Configuración de conexión
$host = "github.com";
$usuario = "doclocator-604"; // Cambia si tu usuario es diferente
$contrasena = "doclocator604"; // Cambia por tu contraseña real
$baseDeDatos = "doclocator";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario con validación básica
$paciente = $_POST['paciente'] ?? '';
$medico = $_POST['medico'] ?? '';
$especialidad = $_POST['especialidad'] ?? '';
$municipio = $_POST['municipio'] ?? '';
$fecha = $_POST['fecha'] ?? '';
$hora = $_POST['hora'] ?? '';
$telefono = $_POST['telefono'] ?? '';

// Validar que los campos obligatorios estén llenos
if (empty($paciente) || empty($medico) || empty($especialidad) || empty($municipio) || empty($fecha) || empty($hora)) {
    die("Por favor completa todos los campos obligatorios.");
}

// Preparar e insertar la cita
$sql = "INSERT INTO citas (paciente, medico, especialidad, municipio, fecha, hora, telefono)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $paciente, $medico, $especialidad, $municipio, $fecha, $hora, $telefono);

if ($stmt->execute()) {
    echo "✅ Cita registrada correctamente.";
} else {
    echo "❌ Error al registrar la cita: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
