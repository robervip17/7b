<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
  echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
  $resultado = $conexion->query("SELECT * FROM usuarios WHERE nombre='Roberto'");
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
      <a href="registro.php">Reguistro</a>
    </nav>
    <table border=1 cellpadding=4 cellspacing=0 width="100%">
     <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Puntuacion</th>
     </tr>
     <?php
     foreach ($resultado as $usuarios) {
       echo "<tr>";
       echo "<td>".$usuarios['id']."</td>";
       echo "<td>".$usuarios['nombre']."</td>";
       echo "<td>".$usuarios['puntuacion']."</td>";
       echo "</tr>";
     }
     ?>
   </table>
    <form>
      <br>
     Siguiente fila
     <input type="text" id="fila" value="">
     Siguiente columna
     <input type="text" id="columna" value="">
     <button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button>
     <br><br>
     Movimientos realizados
     <input type="text" id="movimientosRealizados1" value="" disabled=”disabled” >
     Num movimientos
     <input type="text" id="numMovimientos" value="" disabled=”disabled”>
     <br><br>
     Mensajes
     <input type="text" id="mensajes" value="" disabled=”disabled”>
    <script type="text/javascript" src="codigo.js">
    </script>
  </body>
</html>
