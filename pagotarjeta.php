<!DOCTYPE html>
<html>
<head>
	<title>Formato de pago </title>
	<link rel="stylesheet" type="text/css" href="./STATIC/CSS/estilos.css">
	<link rel="stylesheet" type="text/css" href="/STATIC/CSS/estilos.css">
</head>
<body>
	<div class="container">
<h1>Tipo De Pago </h1>
		<form action="./index.php">
			<div class="form-input">
				<input type="text" name="Usuario" placeholder="Ingrese Tipo De Tarjeta">
			</div>
			<div class="form.input">
				<input type="password" name="Contraseña" placeholder="Ingrese Contraseña">
			</div>
			<h1>
				Datos De Tipo De Pago Con Tarjeta
				<input type="text" name="Nro de Tarjeta" placeholder="Nro de Tarjeta">
			</h1>
			<h1> Caducidad
			<input type="text" name="caducidad" placeholder="caducidad">
			</h1>
			<h1> Codigo de Seguridad/cvv2
			<input type="text" name="Codigo de Seguridad/cvv2" placeholder="Codigo de Seguridad/cvv2">
			</h1>
			<h1>Titular De La Tarjeta
			<input type="text" name="Titular de la Tarjeta" placeholder="Titular de la Tarjeta">
			</h1>
			<h1> Direcciòn
			<input type="text" name="Direccion" placeholder="Direccion">
			</h1>
			<h1> Ciudad
			<input type="text" name="Ciudad" placeholder="Ciudad">
			</h1>
			<h1> Direcciòn
			<input type="text" name="Direccion" placeholder="Direccion">
			</h1>
			<h1> Provincia
			<input type="text" name="Provincia" placeholder="Provincia">
			</h1>
			<h1> Codigo Postal
			<input type="text" name="Codigo Postal" placeholder="Codigo Postal">
			</h1>
				<input type="submit"  name="Entrar" value="Entrar" class="btn-login" >			
			<br>
			<a href="#">Olvide Contraseña</a>
			<br><br>
			<p>No tengo Cuenta?<a href="#">Registrar</a>
		</form>
	</div>
</body>
</html>