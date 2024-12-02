<?php
// Inicializar cookies
if (!isset($_COOKIE["check"])) {
    setcookie("check", 1);
}

if (isset($_POST["submit"])) {
    // Guardar que el usuario ha votado
    if (!isset($_COOKIE["voted"])) {
        setcookie("voted", 1);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="iniciodiseño.css">
<head>
    <meta charset="UTF-8">
    <title>Cuestionario sobre Violencia</title>
</head>
<body>
<h1>Cuestionario sobre Violencia</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    $questions = [
        "1. ¿Crees que la violencia es un problema en tu comunidad?",
        "2. ¿Has sido testigo de un acto violento en el último año?",
        "3. ¿Consideras que la violencia doméstica es un tema tratado adecuadamente?",
        "4. ¿Conoces a alguien que haya sido víctima de violencia?",
        "5. ¿Crees que la educación puede ayudar a prevenir la violencia?",
        "6. ¿Te sientes seguro en tu entorno habitual?",
        "7. ¿Consideras que los medios de comunicación fomentan la violencia?",
        "8. ¿Estás de acuerdo con que el castigo físico es una forma de disciplina?",
        "9. ¿Crees que la violencia es más común en ciertas edades?",
        "10. ¿Estás dispuesto a participar en actividades para prevenir la violencia?"
    ];

    // Mostrar preguntas
    foreach ($questions as $index => $question) {
        echo "<h3>$question</h3>";
        echo '<input type="radio" name="reply' . $index . '" value="Sí"> Sí<br>';
        echo '<input type="radio" name="reply' . $index . '" value="No"> No<br><br>';
    }

    // Mostrar botón de enviar
    echo '<input name="submit" type="submit" value="Enviar">';
    ?>
</form>

<?php
// Procesar respuestas
if (isset($_POST['submit']) && !empty($_POST['reply0'])) {
    $file = "results.txt";
    $fp = fopen($file, "a"); // Abrir en modo de añadir

    foreach ($questions as $index => $question) {
        if (isset($_POST['reply' . $index])) {
            $reply = $_POST['reply' . $index];
            fputs($fp, "$reply\n");
        }
    }
    fclose($fp);
    echo "<p>Gracias por tu participación.</p>\n";
}
?>
<p><a href="results.php" target="_blank">Ver resultados del cuestionario</a></p>

<nav>
<ul>
<p><li><a href="proyectosdevida.html">Proyecto de vida</a></li></p>
</ul>
</nav>

</body>
</html>
