<html><head><meta charset="utf-8"> </head>
<body>
<?php
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Apellidos: ".$resultados['apellidos']."<br/>";
echo "- Dirección: ".$resultados['direccion']."<br/>";
echo "- Teléfono: ".$resultados['telefono']."<br/>";
echo "- Edad: ".$resultados['edad']."<br/>";
echo "- Altura: ".$resultados['altura']."<br/>";
echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect(“localhost", “root", “12345678");
mysqli_select_db($link, “agent");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM telefonoss");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>
</body></html>