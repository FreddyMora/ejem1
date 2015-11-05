<!DOCTYPE html>
<html>
<body>

<?php

$nombre="";
$apellidos="";
$fono="";    




IF ($_POST){
    
    var_dump($_POST);    
            
    
    $nombre=$_post["fnombre"]; 
    $apellidos=$_post["fapellidos"];
    $fono= $_post["ffono"];       
    
    var_dump($nombre);
    var_dump($apellidos);
    var_dump($fono);
    
    
    
}




// Conectando, seleccionando la base de datos
//$link = mysqli_connect('localhost','root','','');


        
//if(mysqli_connect_errno()) {
//    echo "conexion erronea  ", mysqli_connect_error();
        
//}       

//else {
//    echo 'tu conexion ha sido exitosa';
    
//}




//$query="SELECT `id`, `rut`, `nombre`, `apellidos`, `direccion`, `comuna`, `ciudad`, `edad`, `sexo`, `telefono`, `celular`, `email` FROM `listas` WHERE 1";



?>

</body>
</html>