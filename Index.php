<html>
<head>
	<title>Inicio</title>
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
       <center> <h1 style = "color: #FF0000" > AlertaYa</h1><img src="images/alerta.png" width="90px">
        </br>
		</br>
                 <p style = "font-family:arial;">Bienvenido a AlertaYa.</p></br>
				 <p style = "font-family:arial;">En esta pagina web se registraran a las 
			     los datos basicos que se necesitan para identificar a una persona desaparecida. </p></br>
		
		<img src="images/registro.jpeg" width="200px" height="160px">
		<img src="images/policia1.jpg" width="200px" height="160px"> 
		<img src="images/policia2.jpg" width="200px" height="160px"> 
		<img src="images/policia3.jpg" width="200px" height="160px"> </br></br>


		<p style = "font-family:arial;">Comparte nuestra pagina.</p></br>
		<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0&appId=365196292372454&autoLogAppEvents=1" nonce="oJ6WbHw8"></script>
<div class="fb-share-button" data-href="https://tesisalertaya.000webhostapp.com/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftesisalertaya.000webhostapp.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
		</center>

</body>
</html>