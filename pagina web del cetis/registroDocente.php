<?php



$usuario = "cetis,proyecto."; 
$password = "";  
$servidor = "localhost"; 
$basededatos =""; 



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");





$matricula=$_POST['clave_docente'];
$nombre=$_POST['nombre'];
$apellidopaterno=$_POST['apeido_paterno'];
$apellidomaterno=$_POST['apeido_materno'];
$telefono=$_POST['direccion'];
$correoelectronico=$_POST['correo'];
$direccion=$_POST['telefono'];


    
$sql="INSERT INTO alumnos VALUES ('$clave_docente','$nombre','$apeido_paterno','$apeido_materno','$direccion','$correo','$telefono')"; 


$ejecutar=mysqli_query($conexion, $sql);



if(!$ejecutar){

    echo"huvo algun error,intenta otra ves"; 
    
}else{

    echo"datos guardado correctamente <br><a href='index.html'>volver</a>";
    
}
 
?>