<HTML>
	<head>

	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["codigo"])){
				header("Location: http://localhost/PP/SesionPP.php");
			}
		?>
		<a href="Cerrar_sesionPP.php">Cerrar la sesi&oacute;</a><br>
		<a href="NuevoPP.php">Nuevo</a>
	</body>
</HTML>	