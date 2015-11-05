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


/// crean la conexion con el localhost   usuario pasword
//$con = mysqli_connect("localhost","u462388608_1","mafetam88","u462388608_1");
//$con = mysql_connect("localhost","u462388608_1","mafetam88");
//mysql_select_db("u462388608_1",$con);


 
$con = mysqli_connect("localhost","root","","") or die("Some error occurred during connection " . mysqli_error($con));  
 
// Write query
 
$strSQL = "SELECT  FROM listas";
 
// Execute the query.
 
$query = mysqli_query($con, $strSQL);
while($result = mysqli_fetch_array($query))
{
  echo $result["ok"]."
";
}
 
// Close the connection
mysqli_close($con);
 




?>

    <table border="1">
        <tr>
            
            <td colspan="9"> Mi consulta Sql query con php</td>
            
        </tr>  
        
        <tr> 
            <td>nombre </td>
            <td>apellidos </td>
            <td>direccion</td>
            <td>comuna </td>
            <td>ciudad </td>
            <td>rut </td>
            <td>id </td>
            <td>sexo </td>
            <td>telefono </td>
            <td>edad </td>
        </tr>
        
       
    
    
    <?php
    
    $resultado = mysqli_query(" select * from listas");

while($row = mysqli_fetch_array($resultado)) { ?>
      
        
      <tr>
      <td> <?php echo $row ["nombre"];?> </td>
      <td> <?php echo $row ["apellidos"];?> </td>
      <td> <?php echo $row ["direccion"];?> </td>
      <td> <?php echo $row ["comuna"];?> </td>
      <td> <?php echo $row ["ciudad"];?> </td>
      <td> <?php echo $row ["rut"];?> </td>
      <td> <?php echo $row ["id"];?> </td>
      <td> <?php echo $row ["sexo"];?> </td>
      <td> <?php echo $row ["telefono"];?> </td>
      <td> <?php echo $row ["edad"];?> </td>
      </tr>
      
    <?php   
      }
    ?>        
    </table>    
</body>
</html>