<HTML>
</head>
  <body>
    <a href="Cerrar_sesionPP.php"><h4>Cerrar Sesion</h4></a>
    <?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: http://localhost/PP/loginPP.php");
}
   
    $Nombre = $_POST['txtNombre'];
    $Telefono = $_POST['txtTelefono'];
   $Celular = $_POST['txtCelular'];
    $Domicilio = $_POST['txtDomicilio'];

   echo "<h1>Datos: </h1>";
   echo "<h3>Nombre: </h3>".$Nombre;
   echo "<h3>Telefono: </h3>".$Telefono;
   echo "<h3>Celular: </h3>".$Celular;
   echo "<h3>Domicilio: </h3>".$Domicilio;

      ?>
      <form method="post" action="DirectorioPP.php">
      
      <input type="submit" value="Volver" /></br>
   
    </form>	
   	
  </body>

</HTML>