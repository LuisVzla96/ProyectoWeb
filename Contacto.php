<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>

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
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
<link rel="stylesheet" type="text/css" href="cssMenu/DiseñoMenu.css" />

<style>

body{
	background-image:url(Imagenes/02.jpg);
	background-size: 100% 100%;
	background-attachment:fixed;
	 }
p{
	color: #A5321A
	}
h1{
	color: #A5321A
	}

</style>

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

<div class="contenedor">
<table width="200" border="0" align="center">
  <tr>
    <td><h1>Contacto</h1></td>
    <td><p>Fracc. el Pedregal, calle jadre N°27</p>
    <p>CP: 85890</p>
    <p>luis.alf.v2@gmail.com</p></td>
    <td><p>Telfonos: 6421170707</p>
    <p>6421509402</p></td>
  </tr>
  
  <form action="enviar.php" method="post">
</table>

<table align="center">
<tr>
<td width="300">
<input type="text" name="nombre" placeholder="Nombre" size="50"  required="required" />
<input type="text" name="correo" placeholder="Correo" size="50" required="required" />
<input type="number" name="telefono" placeholder="Telefono" size="50" required="required" />
<input type="text" name="asunto" placeholder="Asunto: Venta o Renta" size="50" required="required"/>
</td>
<td width="372">
<textarea name="mensaje" placeholder="Deje su Mensaje" style="padding-left:24px; padding-right:10px;"></textarea>
<br />
<input type="submit" value="Enviar" align="left"  />

</td>
</tr>

</table>
</div>
</form>


<?php
		if(isset($_POST['submit'])){
			require("principal.php");
		}
	?>

</body>
</html>