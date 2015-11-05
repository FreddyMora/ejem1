<!DOCTYPE html>
<html>
    
   <head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>BASE DE DATOS CONTACTOS</title>
    <meta name="description" content="base de datos mysql">
    <meta name="keywords" content="website mysql">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- modernizr enables HTML5 elements and feature detects prueba virtual-->
    
  </head>
   
<body>

    <h1> FORMULARIO DE CONTACTOS </h1>
		

     <form class="contact_form" action="conectarbase.php" method="get" enctype="multipart/form-data">
     <table>
                  
     
         <tr> 
         <td>NOMBRE</td>
         <td>
         <input type="text" name="fnombre" value=" " >
         </td>
         </tr>
        
         <tr>     
         <td>APELLIDOS </td>  
         <td>    
         <input type="text" name="fapellidos">       
         </td>
         </tr> 
         <tr> 
         <td>RUT</td>
         <td>
         <input type="text" name="frut">
         </td>
         </tr>
         <tr> 
         <td>DIRECCION</td>
         <td>
         <input type="text" name="fdireccion">
         </td>
         </tr> 
         <tr> 
         <td>COMUNA              
         </td>        
         <td>
         <input type="text" name="fcomuna">
         </td>
         </tr> 
         <tr> 
         <td>CIUDAD </td>
         <td> 
         <input type="text" name="fciudad">
         </td>
         </tr> 
         <tr> 
         <td>SEXO</td>  
         <td>
             <input type="radio" name="fsexo" value="masculino" checked>MASCULINO
             <input type="radio" name="fsexo" value="femenino"> FEMENINO
         </td>
         </tr> 
         <tr> 
         <td>EDAD</td> 
         <td>
         <input type="text" name="fedad">
         </td>
         </tr> 
         <tr> 
         <td>FONO</td>    
         <td>
         <input type="text" name="ffono">
         </td>
         </tr> 
         <tr> 
         <td>CELULAR</td>
         <td>
         <input type="text" name="fcelular">
         </td>
         </tr> 
         <tr> 
         <td>EMAIL</td>
         <td> 
         <input type="email" name="femail" >
         </td>
         </tr>
         
      
         
         
         
         
         
         
         <tr> 
         <td> 
         <input type="reset" value="borrar">
         </td>
         <td> 
         <input type="submit" formmethod="post" formaction="conectarbase.php" value="grabar">
         </td>
         </tr> 
         
          <tr> 
       
         <td> 
         <input type="submit" formmethod="post" formaction="tablareg.php" value="listado de registros">
         </td>
         </tr> 
         
         
         <tr> 
         <td>BUSCAR REG. RUT</td>
         <td>
         <input type="text" name="buscarreg">
         </td>
         </tr>
         
         
          <tr> 
       
         <td> 
         <input type="submit" formmethod="post" formaction="seekreg.php" value="buscar registro">
         </td>
         </tr>
         
         
         
         
          <tr> 
         <td>NUM. REG. A BUSCAR</td>
         <td>
         <input type="text" name="LECTURASEC">
         </td>
         </tr>
        
                <tr> 
       
         <td> 
         <input type="submit" formmethod="post" formaction="secuencialreg.php" value="lectura-secuencial">
         </td>
         </tr>
         
          <tr> 
         <td>REG. A ELIMINAR </td>
         <td>
         <input type="text" name="ELIMINARREG">
         </td>
         </tr>
         
               <tr> 
       
         <td> 
         <input type="submit" formmethod="post" formaction="eliminarreg.php" value="Eliminar Registro">
         </td>
         </tr>        
           
     </table>
  </form>            
            
</body>
</html>
