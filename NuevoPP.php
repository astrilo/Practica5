<HTML>
	<head>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['codigo'])){
				header("Location: http://localhost/PP/SesionPP.php");
			}
		?>
		<h2>Nuevo Contacto</h2>
		<form method="post" action="Ver_nuevoPP.php">    
      	<label for="txtNombre">Nombre </label><br/>
      	<input type="textnombre" name="txtNombre" /> <p/>
      	<label for="txtTelefono">Telefono</label><br/>
      	<input type="texttelefono" name="txtTelefono" /> <p/>
		<label for="txtCelular">Celular</label><br/>
    	<input type="textcelular" name="txtCelular" /> <p/>
		<label for="txtDomicilio">Domicilio</label><br/>
     	<input type="textdomicilio" name="txtDomicilio" /> <p/></br><br>
		<input type="submit" value="Guadar" />
		<a href="Cerrar_sesionPP.php"><h3>Cerrar Sesion</h3></a>
   </form>
	</body>
</HTML>