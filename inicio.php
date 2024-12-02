<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="iniciodiseño.css">
     
        <head>
<meta http-equiv="refresh" content="5;  url=menuviolencia.html"> 
<title>  LA VIOLENCIA </title>
 </head>

<body>
  <center> 
<h1>¿Sufres de violencia? </h1>
<img style="width:500px;heigth:500px" src="inicio3.png" >
 </center>
<p4>
<img style="width:300px;heigth:300px" src="inicio2.png" >
</p4>

<p3>
<img style="width:300px;heigth:300px" src="inicio.png" >
</p3>
<center>
<p>La violencia de genero</p><br>
<p1>NO</p1>

<p2> es</p2>
<p>un problema privado</p>
<p2>sino social</p2>

</center>
<html>
<head>
    <title>Contador Sencillo</title>
</head>
<body>
<html>
<p>Cantidad de visitas:
<b>
<?php

$filename = "counter.txt";


if (!file_exists($filename)) {
    file_put_contents($filename, '0');
}

$fp = fopen($filename, "r+");
$counter = (int)fgets($fp, 7); 
$counter++;
rewind($fp);
fputs($fp, $counter);
fclose($fp);
echo $counter; 
?>
</b></p>
</body>
</html>

 
 </body>
 </html>
