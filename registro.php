<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$documento=$_POST['Documento'];
$contraseña=$_POST['Contraseña'];
$nombredeperfil=$_POST['Nombre_de_perfil'];
$tipodedoc=$_POST['Tipo_de_documento'];
$nombres=$_POST['Nombres'];
$apellidos=$_POST['Apellidos'];
$edad=$_POST['Edad'];
$telefono=$_POST['Telefono_movil'];
$categoria=$_POST['Categoria_a_cargo'];
$email=$_POST['Email'];
$consulta="INSERT INTO `registroentrenador` (`Documento`, `Contraseña`, `Nombre_de_perfil`, `Tipo_de_documento`, `Nombres`, `Apellidos`, `Edad`, `Telefono_movil`, `Categoria_a_Cargo`, `Email`) VALUES(`$documento`,`$contraseña`,`$nombredeperfil`,`$tipodedoc`,`$nombres`,`$apellidos`,`$edad`,`$telefono`,`$categoria`,`$email`);";
$resultado=mysqli_query($conexion, $consulta) or die ("Error de Registro");
echo "Registro Exítoso";
mysqli_close($conexion);

?>