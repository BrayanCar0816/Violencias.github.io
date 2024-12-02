<?php
$filename = "results.txt";
if (!file_exists($filename) || filesize($filename) == 0) {
    echo "<h1>No hay resultados disponibles.</h1>";
    exit;
}

// Leer el contenido del archivo
$fp = fopen($filename, "r");
$results = [];
while (($line = fgets($fp)) !== false) {
    $results[] = trim($line); // Convertir cada línea en un array
}
fclose($fp);

// Contar respuestas
$totalVotes = count($results);
$yesCount = array_count_values($results)["Sí"] ?? 0;
$noCount = $totalVotes - $yesCount;

// Mostrar resultados
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Cuestionario</title>
</head>
<body>
    <h1>Resultados del Cuestionario sobre Violencia</h1>
    <p>Total de respuestas: <?php echo $totalVotes; ?></p>
    <p>Respuestas "Sí": <?php echo $yesCount; ?></p>
    <p>Respuestas "No": <?php echo $noCount; ?></p>
    
    <p><a href="cuestionario.php">Volver al cuestionario</a></p>
</body>
</html>
