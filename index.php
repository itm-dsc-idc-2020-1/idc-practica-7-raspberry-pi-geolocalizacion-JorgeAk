<!DOCTYPE html>

<!--
Equipo 3
Maria Guadalupe Silva Alvarado
Gabriel Lemus Navarro
Jorge Luis MarinColin 
Práctica 7: Raspberry Pi (geolocalización)
-->

<html lang="es">
	<head>
        <meta charset="utf-8" />
		<title>Practica 7</title>
        
        <link rel="stylesheet" type="text/css" href="php_mi_mapa.css" />
        <script language="javascript" src="php_mi_mapa.js"></script>
	</head>
	<body>
		<h1>Mapa del edificio "O" </h1>
        <?php

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", "root"); // set database user

define ("DB_PASS",""); // set database password

define ("DB_NAME","php_mi_mapa"); // set database name


$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Couldn't make connection.");

?>

   
       <form action="accion.php" method="post">
  <div class="row">
    <div class="col " style="color:#4C0B5F; font-weight: bold;">
     <p >Latitud 1: <input type="text" name="latitud1" size="20" value="<?php $sql ="select latitud from lugares where id=1"; $query = mysqli_query($link,$sql);if (!$query) { echo 'No se pudo ejecutar la consulta: ';exit;}while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
   <p >Longitud 1: <input  type="text" name="longitud1" size="20" value="<?php
$sql ="select longitud from lugares where id=1";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
</div>
<div class="col" style="color:#08088A ; font-weight: bold;">
   <p>Latitud 2: <input type="text" name="latitud2" size="20" value="<?php
$sql ="select latitud from lugares where id=2";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
   <p>Longitud 2: <input type="text" name="longitud2" size="20" value="<?php
$sql ="select longitud from lugares where id=2";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
</div>
<div class="col" style="color:#FFFF00 ; font-weight: bold;">
   <p>Latitud 3: <input type="text" name="latitud3" size="20" value="<?php
$sql ="select latitud from lugares where id=3";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
   <p>Longitud 3: <input type="text" name="longitud3" size="20" value="<?php
$sql ="select longitud from lugares where id=3";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
</div>
<div class="col" style="color:#DF7401 ; font-weight: bold;">
   <p>Latitud 4: <input type="text" name="latitud4" size="20" value="<?php
$sql ="select latitud from lugares where id=4";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
   <p>Longitud 4: <input type="text" name="longitud4" size="20" value="<?php
$sql ="select longitud from lugares where id=4";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>
</div>
</div>
<br>
<div>
  <div class="col">
   <p style="color:#FF0000";>Latitud raspberry: <input type="text" name="latitud5" style="color:#FF0000"; size="20" value="<?php
$sql ="select latitud from lugares where id=5";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>


   <p style="color:#FF0000";>Longitud rasberry: <input type="text" style="color:#FF0000"; name="longitud5" size="20" value="<?php
$sql ="select longitud from lugares where id=5";
$query = mysqli_query($link,$sql);
if (!$query) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}
while ($row = mysqli_fetch_row($query)) {
       // echo $row[0];
        echo $final=$row[0];
    }

?>"></p>

   <p style="color:#FF0000";><input type="submit" style="color:#FF0000"; value="Modificar" /></p>
 
   </div>
  </div>      
  
   </form>
   
   <br>
   <br>
        <canvas id="mapa" width="1000px" height="500px">
			Tu navegador no soporta CANVAS
		</canvas>
        <?PHP
            $servidor="localhost";
            $usuario="root";
			$clave="";
            $conexion = mysqli_connect($servidor, $usuario, $clave,"php_mi_mapa");
            if (mysqli_connect_errno())
            {
                echo "Error al conectarse a MySQL: " . mysqli_connect_error();
            }
            $sql = "select * from lugares";
            $resultado=mysqli_query($conexion, $sql);
            $renglon=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            $latitud1 = $renglon['latitud'];
            $longitud1 = $renglon['longitud'];
            echo "<br />Latitud 1: ".$latitud1. " Longitud 1: ".$longitud1;
            $renglon=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            $latitud2 = $renglon['latitud'];
            $longitud2 = $renglon['longitud'];
            echo "<br />Latitud 2: ".$latitud2. " Longitud 2: ".$longitud2;
            $renglon=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            $latitud3 = $renglon['latitud'];
            $longitud3 = $renglon['longitud'];
            echo "<br />Latitud 3: ".$latitud3. " Longitud 3: ".$longitud3;
             $renglon=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            $latitud4 = $renglon['latitud'];
            $longitud4 = $renglon['longitud'];
            echo "<br />Latitud 4: ".$latitud4. " Longitud 4: ".$longitud4;
             $renglon=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
            $latitud5 = $renglon['latitud'];
            $longitud5 = $renglon['longitud'];
            echo "<br />Latitud Raspberry: ".$latitud5. " Longitud Raspberry: ".$longitud5;           
            echo "<script>dibujar($latitud1, $longitud1, $latitud2, $longitud2,$latitud3,$longitud3,$latitud4,$longitud4,$latitud5,$longitud5);</script>";



            mysqli_close($conexion);
		?>
	</body>
</html>
