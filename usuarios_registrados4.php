<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>usuarios registrados</title>
</head>

<body>
<?php
    session_start();  //se reanuda la session que se creo para el usuario
	                  //rescata todo lo almacenado en la pagina superglobal
	
 if(!isset($_SESSION["usuario"])){
	 
	 header("Location:login.php"); //si no es usuario o entra de manera co correcta le reedirije a login
 }	

?>
  <h1>bienvenidos, solo usuarios registrados</h1>
  <?php  //video 60

    echo "usuario " .$_SESSION["usuario"] . "<br><br>";
	 
  ?>
  <p><a href = "cierre.php">cierra sesion</a></p> 
  
   <p>accseso solo para usuarios registrados</p>
   
    <p><a href="usuarios_registrados1.php">volver</a></p>
</body>

</html>