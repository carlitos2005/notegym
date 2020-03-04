<!DOCTYPE html>
<html lang="es.co">
<head>
  <meta charset="utf-8">
  <title>ON-GYM</title>
  <link rel="shurtcut icon" href="./STATIC/IMAGES/gym.jpg">
  <link rel="stylesheet" type="text/css" href="./STATIC/CSS/estilos.css">
</head>
<body>
  <div class="container">
    <img src="./STATIC/IMAGES/lol.png">
    <h1>Iniciar sesión</h1>
    <form action="./principal.php">
      <div class="form-input">
        <input type="text" name="Usuario" placeholder="Ingrese Usuario">
      </div>
      <div class="form.input">
        <input type="password" name="Contraseña" placeholder="Ingrese Contraseña">
      </div>
      <nav href="./principal.php">
      <input type="submit" name="Entrar" value="Entrar" class="btn-login" >
      </nav>
      <br>
      <a href="#">Olvide Contraseña</a>
      </br>

    </form>
    
  </div>

</body>
</html>