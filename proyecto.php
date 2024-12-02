<?php
// Nombre del archivo donde se guardarán los proyectos
$filename = "proyectos.txt";

// Manejo del formulario para añadir un nuevo proyecto
if (isset($_POST['submit'])) {
    $nuevoProyecto = $_POST['nuevo_proyecto'] ?? '';
    if (!empty($nuevoProyecto)) {
        file_put_contents($filename, $nuevoProyecto . PHP_EOL, FILE_APPEND);
    }
}

// Leer los proyectos guardados
$proyectosGuardados = [];
if (file_exists($filename)) {
    $proyectosGuardados = file($filename, FILE_IGNORE_NEW_LINES);
}

// Proyecto de vida fijo
$proyectoFijo = "Mi proyecto de vida:En este momento tengo varias metas a cortoy largo plazo,un ejemplo de corto plazo seria 
terminar mi bachillerato,eetoy a unos meses de poderlo lograr y me gustaria cumplirlo,otra meta a corto plazo seria,poder 
aprender un poco mas sobre calculo  y ese tipo de ramas de las matematicas ya que eso me servira mucho a mi meta a largo plazo que seria poder entar
a alguna universidad y poder estudiar alguna ingenieria,mas metas a largo plazo seran como tipo poderme comprar una casa o simplemente independizarme
trener una familia,claro que esto quiero que se cumpla cuando logre tener una estabilidad economica y emocionalmente,ya que aun no estoy preparado para todo esto..";
?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="iniciodiseño.css">
<head>
    <meta charset="UTF-8">
    <title>Proyecto de Vida</title>
</head>
<body>
    <h1>Proyecto de Vida</h1>
    <p><?php echo $proyectoFijo; ?></p>

    <h2>Añadir Nuevo Proyecto</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea name="nuevo_proyecto" rows="4" cols="50" placeholder="Escribe tu nuevo proyecto aquí..."></textarea><br>
        <input type="submit" name="submit" value="Guardar Proyecto">
    </form>

    <h2>Proyectos Guardados</h2>
    <ul>
        <?php
        foreach ($proyectosGuardados as $proyecto) {
            echo "<li>" . htmlspecialchars($proyecto) . "</li>";

        }
        ?>
    </ul>
<p><li><a href="menuviolencia.html">Regresar a la Informacion</a></li></p>
</body>
</html>
