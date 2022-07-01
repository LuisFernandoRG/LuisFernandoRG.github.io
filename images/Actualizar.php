<html>
<head>
	<title>Actualizar</title>
	<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav {
				width:500px; /*Le establecemos un ancho*/
				margin:0 auto; /*Centramos automaticamente*/
			}

			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#566573;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
                border: 1px solid #999;

			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
            input{
 
                font: 1em sans-serif;
                width: 300px;
                box-sizing: border-box;
                border: 1px solid #999;
                border-radius: 3em;
            }
            label {
                display: inline-block;
                width: 90px;
                text-align: right;
            }

            form {
                /* Centrar el formulario en la página */
                margin: 0 auto;
                width: 400px;
                /* Esquema del formulario */
                padding: 1em;
                border: 3px solid #212F3C;
                border-radius: 3em;
            }
			select {
                font: 1em sans-serif;
                width: 150px;
                box-sizing: border-box;
                border: 1px solid #999;
                border-radius: 3em;
            }
		</style>
</head>
<body bgcolor="#ECF0F1">
		<?php
				$server = "localhost";
				$usuario = "root";
				$bd = "proyecto";
				
				$conexion = mysqli_connect($server, $usuario, "", $bd)
					or die("Error en la conexion");
				

				$clave = $_POST['txtClave'];
				$nombre = $_POST['txtNombre']; 
				$apellidop = $_POST['txtAP'];
				$sexo = $_POST['cmbSexo'];
				$tp = $_POST['txtTP'];

				mysqli_query($conexion, "UPDATE `personas` SET `clave` = '$clave' WHERE personas.clave='$clave'")
				or die ("Error al actualizar");
				
				mysqli_query($conexion,"UPDATE personas SET nombre = '$nombre' WHERE personas.clave='$clave'")
					or die ("Error al actualizar");

				mysqli_query($conexion,"UPDATE personas SET apellidop = '$apellidop' WHERE personas.clave ='$clave'")
					or die ("Error al actualizar");
					
				mysqli_query($conexion, "UPDATE personas SET sexo = '$sexo' WHERE personas.clave ='$clave'")
					or die ("Error al actualizar"); 

				mysqli_query($conexion, "UPDATE personas SET tp = '$tp' WHERE personas.clave='$clave'")
					or die ("Error al actualizar"); 
					
				
				mysqli_close($conexion);
			
				echo "<script>alert('Datos actualizo correctamente')</script>";
			?>
<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
					<li><a href="Index.php">Inicio</a></li>
					<li><a href="">Servicios</a>
						<ul>
							<li><a href="forRegistrar.php">Registrar</a></li>
							<li><a href="frmActualizar.php">Actualizar</a></li>
							<li><a href="frmEliminar.php">Eliminar</a></li>
						</ul>
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
		</br>
		</br>
        </br>
		</br>
       <center> <h1 style = "color: #FF0000" > AlertaYa</h1><img src="images/alerta.png" width="90px">
        </br>
		</br>
                 <p style = "font-family:arial;">Bienvenido a AlertaYa.</p></br>
				 <p style = "font-family:arial;">En esta pagina web se registraran a las 
			     los datos basicos que se necesitan para identificar a una persona desaparecida. </p></br>
		
		<img src="images/registro.jpeg" width="200px" height="160px">
		<img src="images/policia1.jpg" width="200px" height="160px"> 
		<img src="images/policia2.jpg" width="200px" height="160px"> 
		<img src="images/policia3.jpg" width="200px" height="160px"> 
		
		</center>

</body>
</html>

