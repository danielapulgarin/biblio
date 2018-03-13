<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="c6.css">
  </head>
  <body>
    <section id="c">
      <form class="" action="conex.php" method="post">
        <table border="1" >
          <tr>
            <td>Nombre</td>
            <td><input type="text" name="txtnom" placeholder="nombre" value=""></td>
          </tr>
          <tr>
            <td>Apellido</td>
            <td><input type="text" name="txtape" placeholder="Apellido" value=""></td>
          </tr>
          <tr>
            <td>Correo</td>
            <td><input type="email" name="txtcor" placeholder="Correo" value=""></td>
          </tr>
          <tr>
            <td>Documento</td>
            <td><input type="text" name="txtdoc" placeholder="Documento" value=""></td>
          </tr>
          <tr>
            <td>Contrasena</td>
            <td><input type="password" name="txtpass" placeholder="contraseña" value=""></td>
          </tr>
        </table>
        <input type="submit" name="ingresar" value="Ingresar">
      </form>
    </section>
    <?php
    if (isset($_POST["txtdoc"])) {
        $server="localhost";
        $user="root";
        $pass="";
        $bd="biblioteca";

        $conexion = mysqli_connect($server,$user,$pass,$bd) or die ("Error de conexion a base de datos. Por favor reintentelo");

        $nom = $_POST["txtnom"];
        $ape = $_POST["txtape"];
        $mail = $_POST["txtcor"];
        $doc = $_POST["txtdoc"];
        $cont = $_POST["txtpass"];
        $confirmacion = "Estos son los datos que has introducido. Muchas gracias por tu participación:<br /><br />Nombre: $nom <br />Apellidos: $ape";

        $sql = "insert into usuarios(Nombre,Apellido,Correo,Documento,Contrasena) values ('$nom','$ape','$mail','$doc','$cont')";

        $consulta = mysqli_query($conexion,$sql) or die ("error de consulta: ".$sql);

      }
    ?>
  </body>
</html>
