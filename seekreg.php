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





IF ($_POST){
//var_dump($_POST);   

//var_dump($_POST['fnombre']);
//var_dump($_POST['fapellidos']);
//var_dump($_POST['ffono']);

$seekreg=($_POST['buscarreg']);

echo $seekreg;

}








$link = mysqli_connect('localhost','root','',''); 
mysqli_select_db($link,'contactos');





if(mysqli_connect_errno()) {
    echo "conexion erronea  ", mysqli_connect_error();        
}       
else {
    
   
}

$sql = "SELECT id,rut, nombre, apellidos, foto FROM listas WHERE rut=$seekreg ";
	$result = mysqli_query($link, $sql);
        
        ?>
        
        <TABLE BORDER="1"> 
        
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
      </tr>
      <?php  
      }
      
mysqli_close($link);

?>

        </table>
        
        
</body>
        
</html>

