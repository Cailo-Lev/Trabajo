<?php
class Alumno {
 // Propiedades privadas
 private $nombre;
 private $apellidos;
 private $numeroControl;
 // Método Setter para asignar valores
 public function setNombre($nombre) {
 $this->nombre = $nombre;
 }
 public function setApellidos($apellidos) {
 $this->apellidos = $apellidos;
 }
 public function setNumeroControl($numeroControl) {
 $this->numeroControl = $numeroControl;
 }
 // Método para mostrar los datos del alumno
 public function mostrarDatos() {
 echo "Nombre: " . $this->nombre . "<br>";
 echo "Apellidos: " . $this->apellidos . "<br>";
 echo "Número de Control: " . $this->numeroControl . "<br>";
 }

public function asignarDatos($nombre, $apellidos, $numeroControl) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->numeroControl = $numeroControl;
}

public function generarCorreo() {
    $correo = strtolower($this->nombre) . "." . $this->numeroControl . "@escuela.com";
    return $correo;
}
}
?>

