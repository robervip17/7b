<?php
$conexion = new mysqli("localhost", "root", "", "juegos");

  if (!empty($_POST['nombre'])&&(!empty($_POST['apellidos']))&&(!empty($_POST['edad']))&&(!empty($_POST['curso']))) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
      $edad = $_POST['edad'];
          $curso = $_POST['curso'];
  $consulta="INSERT INTO usuarios (`nombre`, `apellidos`, `edad`, `curso`) VALUES ('$nombre', '$apellidos', '$edad', '$curso')";

  $resultado =$conexion->query($consulta);
  if (!$resultado)echo $conexion->error;

  $consulta="SELECT * FROM equipo ORDER BY id_equipo DESC LIMIT 1";
  $resultado= $conexion->query($consulta);

  echo "<h2>Tu cuenta se ha creado correctamente. </h2>";

  }

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <nav>
      <font size="250" face="courier new" >Juego de MicroRobots</font>
      <a href="usuarios.php">Jugadores TOP</a>
      <a href="usuarios.php">Usuarios</a>
    </nav>
    <form class="" action="" method="post">
        Dame tu nombre:
        <input type="text" name="nombre" value="" idea id="nombre"><br><br>
        <div id="nombreOculto" style="display:none">Debes rellenar este campo.</div>
        Dime tu primer apellido:
        <input type="text" name="apellidos" value="" idea id="apellidos"><br><br>
        <div id="apellidoOculto" style="display:none">Debes rellenar este campo.</div>
        Dime tu edad:
        <input type="text" name="edad" value="" idea id="edad"><br><br>
        <div id="edadOculto" style="display:none">Debes rellenar este campo.</div>
        <div id="edadOculto1" style="display:none">Tiene que ser un número.</div>
        Dime tu curso:
        <input type="text" name="curso" value="" idea id="curso"><br><br>
        <div id="cursoOculto" style="display:none">Debes rellenar este campo.</div>
        <div id="cursoOculto1" style="display:none">Tiene que ser un número.</div>
        <input type="submit" name="button" value="Enviar" onclick="return comprobar();">
    </form>
    <script type="text/javascript" src="comprobar.js">
    </script>
  </body>
</html>
