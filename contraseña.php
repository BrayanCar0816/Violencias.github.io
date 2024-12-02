<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    if ($password == 'violencia') {
        $_SESSION['loggedin'] = true;
        header('Location: inicio.php'); // Redirigir a la página principal
        exit;
    } else {
        $error = "Contraseña incorrecta. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="iniciodiseño.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protección por Contraseña</title>
    <style>
        body {
            font-family: Bradley Hand ITC;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0; /* Sin margen */
            padding: 40px; /* Reducir padding */
        }
        .container {
            background: white;
            border-radius: 8px;
            padding: 10px; /* Reducir padding para altura */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Cambiar a flex para controlar la alineación */
            flex-direction: column; /* Apilar los elementos verticalmente */
            align-items: center; /* Centrar contenido */
            width: 100%; /* Asegurar que ocupe todo el ancho */
            max-width: 800px; /* Ancho máximo para evitar que se expanda demasiado */
            margin: auto; /* Centrar horizontalmente en la página */
        }
        img {
            max-width: 35%; /* Imagen ocupa el ancho del contenedor */
            height: auto;
            border-radius: 8px;
            margin-bottom: 5px; /* Reducir espacio debajo de la imagen */
        }
        h1 {
            font-size: 45px; /* Reducir tamaño de fuente */
            color: #333;
            margin: 5px 0; /* Reducir margen */
        }
        h2 {
            font-size: 20px; /* Ajustar tamaño de fuente */
            color: #666;
            margin: 5px 0; /* Reducir margen */
        }
        input[type="password"] {
            padding: 8px; /* Mantener padding */
            margin: 5px 0; /* Reducir margen */
            width: 90%; /* Ajustar ancho */
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 12px; /* Mantener padding */
            background-color: #FF1493;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:red;
        }
        .error {
            color: MediumVioletRed;
            margin-top: 5px; /* Espacio entre error y el formulario */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenid@s.</h1>
    <h2>Para poder ingresar a la informacion escribe:violencia.</h2>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPZUL737VehI1hABAxYN-wcRlaRGACKG3_ww&s" alt="Imagen sobre violencia">
    <form method="POST">
        <input type="password" name="password" placeholder="Introduce la contraseña" required>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>
</div>

</body>
</html>