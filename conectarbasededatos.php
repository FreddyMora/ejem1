<!DOCTYPE html>
<html>
<body>

<?

$link
=mysql_connect(
"localhost"
, 
"roor"
, 
""
);

mysql_select_db(
"contactos"
,
$link
) OR DIE (
"Error: No es posible establecer la conexión"
);

?>
    

        



</body>
</html>