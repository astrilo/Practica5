<html>
  <head>
  
  
  </head>
  <body>
    <h2>Panel Principal</h2>
	<a href="Tarea6.0_POST .php"><h4>Intentar de nuevo</h4></a>
<?php
    // obtiene los datos de entrada del formulario
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
    // utiliza los datos de entrada del formulario
   

	if($Codigo == 100 and $Pass == "udg"){
		session_start();
	$_SESSION["codigo"] = $Codigo;
	header("Location: http://localhost/PP/DirectorioPP.php");
      }
      else{
	header("Location: http://localhost/PP/loginPP.php");
	}
    ?>
	
	
	
</body>
</html>