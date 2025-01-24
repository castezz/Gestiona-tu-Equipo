<?php
    
    include('db.php');
    /*incluir archivo db.php*/

    $DOCUMENTO=$_POST['NUM_DOC'];
    /*variable guardar documento*/

    $PASSWORD=$_POST['Contraseña'];

    $consulta="SELECT* FROM iniciosesion where NUM_DOC = '$DOCUMENTO' and Contraseña = '$PASSWORD'";
    /*buscar en la tabla personal coincidencias con documento y password*/

    $resultado= mysqli_query($conexion, $consulta);
    /*aquí se almacena el resultado de la consulta*/

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:retroentrenador.html"); /*en caso de que el usuario si haga login, es decir que sea verdadero*/
    }else{
        include("restablecer.html"); /*en caso de no haber hecho el login, se abrirá la ventana "restablecer.html"*/
    
        /*el h1 es un mensaje de advertencia si no es verdadero el login*/
?>

    <h1>Verifique su documento o contraseña</h1> 

<?php
}

mysqli_free_result($resultado); /*liberar o limpiar la memoria de la variable de resultado*/
mysqli_close($conexion); /*cerrar la conexión*/

?>





