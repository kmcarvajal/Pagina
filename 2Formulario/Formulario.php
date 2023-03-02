<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="css/estilo.css">
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device=width, user-scalable=no">
        <title>Resgistro</title>
    </head>
    <body>
      <div id="fondo2">
        <fieldset>
        <header>
          <legend><h2>Registrado!</h2></legend>
        </header>
        <section id="contenido">
          <p>
    <?php
    //Recuperar Datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tdocumento = $_POST['tdocumento'];
    $ndocumento = $_POST['ndocumento'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $tcontacto = $_POST['contacto'];
    $ncontacto = $_POST['ncontacto'];
    $ccontrasena = $_POST['ccontrasena'];
    $ccifrado = md5($ccontrasena);
    // Datos de la base de datos
    $usuario = 'root' ;
    $contraseña = 'usbw' ;
    $servidor = 'localhost' ;
    $basededatos = 'pagina' ;
    // Creación de la conexión a la base de datos con mysql_connect()
    $conexion=mysqli_connect($servidor, $usuario, $contraseña,$basededatos) or die("Problemas con la conexión");
    mysqli_query($conexion,"insert usuario(Nombre,Apellido,Tdocumento,Ndocumento,Fnacimiento,Edad,Tcontacto,Ncontacto,Contrasena) values
    ('$nombre','$apellido','$tdocumento','$ndocumento','$fecha','$edad','$tcontacto','$ncontacto','$ccifrado')")
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo "Datos guardados correctamente en la base de datos Registro!";
    ?>
          </p>
        </section>
        <footer>
          <p>
          <a href="Login.html">Iniciar Sesión</a>
          </p>
        </footer>
        </fieldset>
      </div>
  </body>
</html>
