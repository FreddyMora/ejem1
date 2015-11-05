<!DOCTYPE html>
<html>
<body>

<?php

$link = mysqli_connect('localhost','root','','');

if(mysqli_connect_errno()) {
    echo "conexion erronea  ", mysqli_connect_error();        
}       
else {
    echo 'tu conexion ha sido exitosa';
    
   
}

$consulta=" SELECT id,nombre,edad FROM listas";

$resultado= mysqli_query($link, $consulta);




mysqli_close($link);

?>
    
    
  
    
    
    
    
</body>
</html>

