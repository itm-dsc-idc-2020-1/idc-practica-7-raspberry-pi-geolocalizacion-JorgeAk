<?php
//Equipo 3 Practica localizacion

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", "root"); // set database user

define ("DB_PASS",""); // set database password

define ("DB_NAME","php_mi_mapa"); // set database name


$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Couldn't make connection.");
$latitud1=$_POST['latitud1'];
$longitud1=$_POST['longitud1'];

$latitud2=$_POST['latitud2'];
$longitud2=$_POST['longitud2'];

$latitud3=$_POST['latitud3'];
$longitud3=$_POST['longitud3'];

$latitud4=$_POST['latitud4'];
$longitud4=$_POST['longitud4'];

$latitud5=$_POST['latitud5'];
$longitud5=$_POST['longitud5'];

$sql1="UPDATE lugares SET latitud=".$latitud1.", longitud=".$longitud1."WHERE id=1";
$sql2="UPDATE lugares SET latitud=".$latitud2.", longitud=".$longitud2."WHERE id=2";
$sql3="UPDATE lugares SET latitud=".$latitud3.", longitud=".$longitud3."WHERE id=3";
$sql4="UPDATE lugares SET latitud=".$latitud4.", longitud=".$longitud4."WHERE id=4";
$sql5="UPDATE lugares SET latitud=".$latitud5.", longitud=".$longitud5."WHERE id=5";
$query = mysqli_query($link,$sql1);
$query2 = mysqli_query($link,$sql2);
$query3 = mysqli_query($link,$sql3);
$query4 = mysqli_query($link,$sql4);
$query5 = mysqli_query($link,$sql5);
header('Location: index.php');
            exit;
//$db = mysqli_select_db(DB_NAME, $link) or die("Couldn't select database");
?>