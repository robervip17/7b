<?php
$conexion = new mysqli("localhost", "root", "", "usuarios");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM datosusu");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_POST['nombre'])&&(!empty($_POST['apellido'])&&(!empty($_POST['usuario']))))
    {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $conexion->query("INSERT INTO datosusu (nombre, apellido, usuario)
                          VALUES ('$nombre','$apellido','$usuario')");

                          echo "<h2>Usuario Registrado $usuario";
    }
    else {


    ?>
    <table>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Usuario</th>
        </tr>
        <?php
          foreach ($resultado as $datosusu) {
            echo "<tr>";
            echo "<td>".$datosusu['nombre']."</td>";
            echo "<td>".$datosusu['apellido']."</td>";
            echo "<td>".$datosusu['usuario']."</td>";
            echo "</tr>";
          }
        ?>
      </table>

  </body>
</html>
<?php } ?>
