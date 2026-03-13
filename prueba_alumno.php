<?php
// Incluir la clase Alumno
require_once 'alumno.php';
// Crear un objeto de la clase Alumno
$alumno1 = new Alumno();
// Asignar valores usando los métodos setters
$alumno1->setNombre("Carlos");
$alumno1->setApellidos("Gómez Pérez");
$alumno1->setNumeroControl("A12345678");
// Mostrar los datos del alumno
$alumno1->mostrarDatos();

// Alumno 1
$alumno2 = new Alumno();
$alumno2->asignarDatos("Carlos", "Gómez Pérez", "A12345678");
$alumno2->mostrarDatos();

echo "<br>";

// Alumno 2
$alumno3 = new Alumno();
$alumno3->asignarDatos("Ana", "López García", "A87654321");
$alumno3->mostrarDatos();

echo "Correo: " . $alumno2->generarCorreo() . "<br>";
?>
