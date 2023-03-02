<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="css/estilo.css">
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device=width, user-scalable=no">
        <title>Bienvenido</title>
    </head>
    <body>
      <div id="fondo2">
<?php

    $vdocu = $_REQUEST['ndocumento'];
    $vcontra = $_REQUEST['contrasena'];
    $vcifrado = md5($vcontra);

    // Datos de la base de datos
      $usuario = 'root';
      $contraseña = 'usbw';
      $servidor = 'localhost';
      $basededatos = 'pagina';
    // Creación de la conexión a la base de datos con mysql_connect()
    $conexion=mysqli_connect($servidor, $usuario, $contraseña,$basededatos) or die("Problemas con la conexión");
    //--------------------------------------------------------------------------------------------------------------------
    $query="SELECT * FROM usuario WHERE Ndocumento = '$vdocu' and Contrasena= '$vcifrado'";
    $login = mysqli_query($conexion,$query);
    $login = mysqli_fetch_array($login);

      if ($login['Ndocumento']==$vdocu and $login['Contrasena']==$vcifrado)
      {echo '<script>alert("Bienvenido")</script>';
      echo "<script>location.href='../1Principal/iindex.html'</script>";}
      else
      {echo '<script>alert("Documento, contraseña no coinciden :/ ")</script>';
    echo "<script>location.href='Login.html'</script>";}
    //--------------------------------------------------------------------------------------------------------------------
    ?>
      </div>
  </body>
</html>
