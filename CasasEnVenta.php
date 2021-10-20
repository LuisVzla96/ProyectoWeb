<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Casas en Venta</title>

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

<body>

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
Casas En Venta
</h1>
</center>
</div>

<div class="contenedor">
<center>
<table width="683">
<tr>
<td width="336">
  <img src="Imagenes/fachada-para-casa-infonavit-2-plantas.jpg"/></td>
<td width="335"><p>Propiedad N° 5128446</p>
  <p>Versión: Elegans</p>
  <ul>
    <li>Dirrección: Zona Norte, calle Tabasco, N° 69</li>
    <li>Terreno:126 m2</li>
    <li>Precio: $ 1,400,000.00</li>
  </ul>
  <p><strong>Descripcion:</strong> 3 recamaras, un baño y medio, sala, cocina, comedor y area de lavado</p></td>
</tr>
<tr>
<td><p>Propiedad N° 1231354</p>
  <p>Versión: Cadier</p>
  <ul>
    <li>Dirección: Col. El Peñon, calle Suca, esquina con Soria, N° 420</li>
    <li>Terreno: 120 m2</li>
    <li>Precio: $ 1,200,000.00</li>
    </ul>
  <p><strong>Descripción</strong>: 3 recamaras, un baño y medio, sala, cocina, comedor y area de lavado.</p></td>
<td>
  <img src="Imagenes/84f0097fde2cafc859b95aac4887aac1.jpg"/></td>
</tr>
<tr>
<td>
  <img src="Imagenes/casa-de-dos-pisos-con-3-recamaras-tipo-infonavit.jpg"/></td>
<td><p>Propiedad N° 3521223</p>
  <p>Versión: Denali</p>
  <ul>
    <li>Dirección: Col. Villa Diamante, calle Plaza, esquina con Booye, N°13</li>
    <li>Terreno: 100 m2</li>
    <li>Precio: $ 900, 000.00</li>
    </ul>
  <p><strong>Descripción:</strong> 2 recamaras, un baño, sala cocina y comedor.</p>
</td>
</tr>
</table>
</center>
</div>

</body>
</html>