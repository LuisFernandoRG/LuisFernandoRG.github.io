<html>
<head>
	<title>Eliminar</title>
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
       <center> <h1 style = "color: #FF0000" > AlertaYa</h1><img src="images/alerta.png" width="90px"></center>
        </br>
		</br>
        <nav>
        <ul>
            <li>
               <center> <h2 style = "color: #8D78DE"> Eliminar </h2>
                <p style = "font-family:arial;"> Si deseas eliminar su registro por favor seleccione su clave.</center> </br>
                <form action="Eliminar.php" method="POST">
                <label> Clave: </label><input type="text" name="txtClave"><br/><br/>
                <center> <input type="submit" value="Eliminar registro" name="btnEliminar"></center>
                </form>
            </li>
        </ul>
        </nav>
        </body>
</html>