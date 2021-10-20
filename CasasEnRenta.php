<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Casas en Renta</title>

<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
	header("Location:admin.php");
}
?>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="ScriptMenu/main.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="cssMenu/DiseñoMenu.css" />

<style>

legend { 
  background-color:green; 
  color: white; 
  font-weight: bold; 
  padding: 5px 0.2em; 
}

body{
	background-image:url(Imagenes/03.jpg);
	background-size: 100% 100%;
	background-attachment:fixed;
	 }
</style>

<header class="contenedor">
<img src="Imagenes/Logo.png" width="269" height="156" class="logo"/>
<br />
<legend></legend>
</header>
</head>

</head>

<body background="Imagenes/03.jpg">

<header>
<div class="contenedor">
<nav class="menu">
<ul>
<li><a href="Inicio.php">Inicio</a></li>
<li><a href="CasasEnVenta.php">Caras En Venta</a></li>
<li><a href="CasasEnRenta.php">Casas En Renta</a></li>
<li><label>Bienvenido</label> <strong><?php echo $_SESSION['user']; ?></strong></li>
<li><a href="desconectar.php" redirect("index.php")> Cerrar Cesión </a></li>
</ul>
</nav>
</div>
</header>

<div style="color: #00000;
  font-weight: normal;
  font-size: 25px;
  font-family: Arial;" class="contenedor">
<center>
<hi> 
Casas En Renta</h1>
</center>
</div>

<div class="contenedor">
<center>
<table width="686">
<tr>
<td width="278">
  <img src="Imagenes/maxresdefault.jpg"/></td>
<td width="317"><p>Propiedad N° 659821</p>
  <ul>
    <li>Dirección: Misioneros, calle Mendoza, esquina Gerardo, N° 65</li>
    <li>Terreno: 90 m2</li>
    <li>Precio Renta: $ 2,000.00/msn</li>
    </ul>
  <p><strong>Descripción:</strong> Una Recamarada, un baño, cocina y sala comedor.</p></td>
</tr>
<tr>
<td><p>Propiedad N° 78430</p>
  <ul>
    <li>Direccion: Fracc. El Pedregal, calle Jade, esquina con granito, N° 25</li>
    <li>Terreno: 110 m2</li>
    <li>Precio Renta: $ 2, 800.00/msn</li>
    </ul>
  <p><strong>Descripción: </strong>2 recamaras, un baño, cocina y sala comedor.</p></td>
<td>
  <img src="Imagenes/0011.jpg"/></td>
</tr>
<tr>
<td>
  <img src="Imagenes/s-l400.jpg"/></td>
<td><p>Propiedad N° 78430</p>
  <ul>
    <li>Direccion: Fracc. Buganbilias, calle Rosamesta, esquina con Azucena, N° 68</li>
    <li>Terreno: 200 m2</li>
    <li>Precio Renta: $ 2, 800.00/msn</li>
  </ul>
  <p><strong>Descripción: </strong>3 recamaras, 2 baños, cocina y sala comedor.</p>

</td>
</tr>
</table>
</center>
</div>

</body>
</html>
