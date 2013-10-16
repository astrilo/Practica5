<HTML>
	<head>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION["codigo"])){
				header("Location: http://localhost/PP/loginPP.php");
			}	
			session_destroy();
			header("Location: http://localhost/PP/loginPP.php");
		?>

	</body>
</HTML>