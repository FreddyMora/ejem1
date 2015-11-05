<html>
    
    <head><meta charset="utf-8">
   
        <style>
table, th, td {
    border: 4px solid red;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
       </style>

        <title secuencia de conexion de base de datos mysql con php ></title>
    </head>
    <body>
        

<?php




$link = mysqli_connect('localhost','root','',''); 
mysqli_select_db($link,'contactos');





if(mysqli_connect_errno()) {
    echo "conexion erronea  ", mysqli_connect_error();        
}       
else {
    
   
}

$sql = "SELECT id,rut, nombre, apellidos, direccion, comuna, ciudad, edad,sexo, telefono, celular, email FROM listas ";
	$result = mysqli_query($link, $sql);
        
        ?>
        
        <TABLE BORDER="1"> 
          <tr>
      <td> ID </td>    
      <td>RUT</td>
      <td>NOMBRE </td>
      <td>APELLIDOS </td>
      <td>DIRECCION </td>    
      <td>COMUNA</td>
      <td>CIUDAD</td>
      <td>EDAD</td>   
      <td>TELEFONO</td>
      <td>CELULAR</td>
      <td>EMAIL</td>
      
      </tr>
            
            
            
            
            
            
            
        <?php
        
        
	while($row = mysqli_fetch_assoc($result))
	{
            
    //            echo "{$row['rut']}";
    //            echo " ";
    //		echo "{$row['nombre']}";
    //            echo " ";
    //            echo "{$row['apellidos']}";
    //            echo "<br> </br>";
       
        
    
        
      ?>  
      <tr>
      <td> <?php echo $row ["id"];?> </td>    
      <td> <?php echo $row ["rut"];?> </td>
      <td> <?php echo $row ["nombre"];?> </td>
      <td> <?php echo $row ["apellidos"];?> </td>
      <td> <?php echo $row ["direccion"];?> </td>    
      <td> <?php echo $row ["comuna"];?> </td>
      <td> <?php echo $row ["ciudad"];?> </td>
      <td> <?php echo $row ["edad"];?> </td>   
      <td> <?php echo $row ["telefono"];?> </td>
      <td> <?php echo $row ["celular"];?> </td>
      <td> <?php echo $row ["email"];?> </td>
      
      </tr>
      <?php  
      }
      
mysqli_close($link);

?>

        </table>
        
        
</body>
        
</html>

