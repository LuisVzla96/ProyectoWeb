<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Whithes and Black</title>

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
<link href="css/Diseño.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
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



<body background="Imagenes/03.jpg">



<header class="contenedor">
<nav class="menu">
<ul>
<li><a href="Inicio.php">Inicio</a></li>
<li><a href="CasasEnVenta.php">Caras En Venta</a></li>
<li><a href="CasasEnRenta.php">Casas En Renta</a></li>
<li><label>Bienvenido</label> <strong><?php echo $_SESSION['user']; ?></strong></li>
<li><a href="desconectar.php" redirect("index.php")> Cerrar Cesión </a></li>
</ul>
</nav>
</header>

<center>
<div style="background-image:url(Imagenes/fracc.jpg); width:100% auto;" class="contenedor">
<center>
  <a href="Contacto.php" class="btn-ghost secundary round">Contacto</a>
</center>
</div>
</center>

<div class="contenedor">
<center>
<table>
<tr>
<td>
<h1>Nueva Casa en Venta</h1>
</td>
<td><h1>Nueva Casa en Renta</h1></td>
</tr>
<tr>
<td><img src="Imagenes/fachada-para-casa-infonavit-2-plantas.jpg" width="300" height="200" /></td>
  <td>-<img src="Imagenes/maxresdefault.jpg" width="300" height="200" />
  </td>
</tr>
<tr>
<td>
<h2>Casa version Elegance</h2> 
</td>
<td>
<h2>Casa pequeña</h2>
</td>
</tr>
</table>
</center>
</div>

</body>
</html>