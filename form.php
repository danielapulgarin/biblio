<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="view/css/page.css">
    <link rel="icon" type="image/jpg" href="view/img/IP.jpg">
    <title>LEGION BOOKS</title>
  </head>
  <body>
    <section id="container">

      <header>
        <section id="TL">
          <img src="view/img/LB.png" width="40%">
          <section id="logo">
            <img src="view/img/IP.jpg" width="50%" height="40%">
          </section>
        </section>
        <nav id="menu">
          <ul>
            <li><a href="page.html">Inicio</a></li>
            <li><a href="qs.html">Quienes Somos</a>  </li>
            <li><a href="form.html">Registro</a></li>
            <li><a href="contacto.html">Contacto</a></li>
          </ul>
        </nav>
      </header>
      <section id="cuerpo">
        <section id="articulos">
            <section id="infart">
            <header id="tart2">
              <p>Registro de Nuevos Usuarios</p>
            </header>
              <P>
                <p style="font-size: 30px;" id="dc">
                  Datos de Contacto
                </p>
            <form name="frmPoll" method="post" action="form.php" id="form">
            <section id="title">
            </section>
              <section>
                <table border="1" >
                  <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtnom" placeholder="nombre" required></td>
                  </tr>
                  <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="txtape" placeholder="Apellido" required></td>
                  </tr>
                  <tr>
                    <td>Correo</td>
                    <td><input type="email" name="txtcor" placeholder="Correo" required></td>
                  </tr>
                  <tr>
                    <td>Documento</td>
                    <td><input type="text" name="txtdoc" placeholder="Documento" required></td>
                  </tr>
                  <tr>
                    <td>Contrasena</td>
                    <td><input type="password" name="txtpass" placeholder="contraseña" required></td>
                  </tr>
                </table>

                  <keygen name="security">
                    <input id="b" type="submit">
                    <input id="b" type="reset">
              </section>
            </form>
           </P>
         </section>
        </section>
        </section>
      <footer id="footer">
        <h3>Derechos Reservados</h3>
      </footer>
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

        $sql = "insert into usuarios(Nombre,Apellido,Correo,Documento,Contrasena) values ('$nom','$ape','$mail','$doc','$cont')";

        $consulta = mysqli_query($conexion,$sql) or die ("error de consulta: ".$sql);
      }
    ?>
  </body>
</html>
