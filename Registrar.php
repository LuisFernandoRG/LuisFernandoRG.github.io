<html>
<head>
	<title>Registrar</title>
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
			$conexion = mysqli_connect ($server, $usuario, "", $bd)
				or die("Error en la conexion");
				
		
				$clave = $_POST['txtClave'];
				$nombre = $_POST['txtNombre'];
				$apellidop = $_POST['txtAP'];
				$sexo = $_POST['cmbSexo'];
				$tp = $_POST['txtTP'];
				$edad = $_POST ['txtedad'];
				$altura = $_POST['txtaltura'];
				$complexion = $_POST['txtComplexion'];
				$rf = $_POST ['txtrf'];
				$cp = $_POST['txtcp'];
				$vu = $_POST['txtvu'];
	
				$insertar = "INSERT into personas values('$clave', '$nombre', '$apellidop', '$sexo', '$tp', '$edad', '$altura', '$complexion', '$rf', '$cp', '$vu')";
				$resultado = mysqli_query($conexion, $insertar)
					or die ("Error al insertar los registros");
	
				mysqli_close($conexion);
			
				echo "<script>alert('Datos insertados correctamente, toma tu fotografia')</script>";
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
		<label> Clave: </label><input type="text" name="txtClave1" value= "<?php echo $clave;?>"><br/><br/>
		<label> Nombre: </label><input type="text" name="txtNombre1" value= "<?php echo $nombre;?>"><br/><br/>
		<label> Apellidos: </label><input type="text" name="txtAP1" value= "<?php echo $apellidop;?>"><br/><br/>
		<label> Sexo: </label><input type="text" name="txtSexo1" value= "<?php echo $sexo;?>"><br/><br/>
		<label> Tono de piel: </label><input type="text" name="txtTP1" value= "<?php echo $tp?>"><br/><br/>
		<label> Edad: </label><input type="text" name="txtedad" value= "<?php echo $edad?>"><br/><br/>
		<label> Altura: </label><input type="text" name="txtaltura" value= "<?php echo $altura?>"><br/><br/>
		<label> Complexion: </label><input type="text" name="txtComplexion" value= "<?php echo $complexion?>"><br/><br/>
		<label> Rasgos faciales: </label><input type="text" name="txtrf" value= "<?php echo $rf?>"><br/><br/>
		<label> Color de cabello: </label><input type="text" name="txtcp" value= "<?php echo $cp?>"><br/><br/>
		<label> Visto ultima vez: </label><input type="text" name="txtvu" value= "<?php echo $vu?>"><br/><br/>
		
		 
		<img src="images/qr.jfif" width="200px" height="160px">
	
		<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0&appId=365196292372454&autoLogAppEvents=1" nonce="OgwXzWTn"></script>
<div class="fb-share-button" data-href="http://localhost/Tesis/Registrar.php" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FTesis%2FRegistrar.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
		</center>
		-->
</body>
</html>