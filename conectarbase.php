<!DOCTYPE html>
<html>
<body>

<?php



$rut=" ";
$nombre=" ";
$apellidos=" ";
$direccion=" ";
$comuna=" ";
$ciudad=" ";
$edad= " ";
$sexo=" " ;
$telefono=" ";
$celular=" ";
$email= " ";
        
        





IF ($_POST){
//var_dump($_POST);   

//var_dump($_POST['fnombre']);
//var_dump($_POST['fapellidos']);
//var_dump($_POST['ffono']);

$nombre=($_POST['fnombre']);
$apellidos=($_POST['fapellidos']);
$fono=($_POST['ffono']);
$celular=($_POST['fcelular']);
$comuna=($_POST['fcomuna']);
$direccion=($_POST['fdireccion']);
$ciudad=($_POST['fciudad']);
$email=($_POST['femail']);
$rut=($_POST['frut']);
$edad=($_POST['fedad']);
$sexo=($_POST['fsexo']);

//$imagen= 'ffotito';


//  echo $nombre;
//  echo $apellidos;
//  echo $fono;
}

// Conectando, seleccionando la base de datos
$link = mysqli_connect('localhost','root','','');   
if(mysqli_connect_errno()) {
    echo "conexion erronea  ", mysqli_connect_error();        
}       
else {
    echo 'tu conexion ha sido exitosa';
    
   
}


mysqli_select_db($link,'contactos');

mysqli_query($link,"SELECT * FROM listas");
mysqli_query($link,"INSERT INTO listas (nombre,apellidos,direccion,comuna,ciudad,sexo,edad,rut,telefono,celular,email) 
VALUES ('$nombre','$apellidos','$direccion','$comuna','$ciudad','$sexo','$edad','$rut','$fono','$celular','$email')");

mysqli_close($link);







?>
    
    
    
    
    
    


    
    
    
    
    
    
    
</body>
</html>