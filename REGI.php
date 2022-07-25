<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="regi.css">
  <div class="active"><a href="Lonig.html">Inicio</a></div>
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <h4>Registrarse</h4>
    <form action="REGI.php" method="POST">
		 <div class="form-register">
		 	 <label for="nombres">Nombre</label>
         <input type="text" name="nombres" required="" pattern="[a-zA-Z]+" >
        <br></br>
         <div class="form-register">
         	 <label for="apellidos">Apellido</label>
         <input type="text" name="apellidos" required="" pattern="[a-zA-Z]+">
          <br></br>
           <div class="form-register">
           	 <label for="correo">Correo</label>
        <input type="text" name="correo" required="">
          <br></br>
                 <div class="form-register">
           	 <label for="contraseñas">Contraseña</label>
        <input type="text" name="contraseñas" required="">
         <br></br>
          <div class="form-register">
          <p>Estoy de acuerdo con los <a href="#">Términos y Condiciones.</a></p>
        <input type="submit" class="submit" name="enviar" value="Enviar">
        <p><a href="ini.html">Ya tengo una cuenta.</a></p>
</div>
</section>
  <?php

if (isset ($_POST['nombres'])) {
  $nombres = $_POST['nombres'];
}

if (isset ($_POST['apellidos'])){
  $apellidos = $_POST['apellidos'];
}

if (isset ($_POST['correo'])){
  $correo = $_POST['correo'];
}

if (isset ($_POST['contraseñas'])) {
  $contraseñas = $_POST['contraseñas'];
  if ($nombres =="Santiago" && $apellidos == "Alvarez") {
  header ("Location: JEFE.html");
}
}
 $datos = " Nombre : $nombres
           Apellido: $apellidos
           Correo : $correo
           Contraseña : $contraseñas ";

           $archivo = fopen("$nombres.txt" , "w");
           $archivo = fopen("$apellidos.txt" , "w");
           $archivo = fopen("$correo.txt" , "w");
           $archivo = fopen("$contraseñas.txt" , "w");
           fwrite ($archivo,$datos);

           echo "Archivo.txt: $datos";

if (isset ($_POST['nombres'])) {
$nombre = $_POST['nombres'];
	echo "Gracias por Ingresar: " . $nombre . "<br>";
}

if(isset ($_POST['nombres'])){

if(empty($nombres)) {
  echo ("  Agregue el nombre");
}else {
if(strlen($nombres) > 15){
  echo ("  El nombre es muy largo");
}
}
}
if(isset ($_POST['apellidos'])){
if(empty($apellidos)){
  echo ("  Agregue el apellido");
}
}
if(isset ($_POST['correo'])){
  if(empty($correo)){
    echo ("  Agregue el correo:");
  }
  }
if(isset ($_POST['contraseñas'])){
if (empty ($contraseñas) ) {
  echo ("  Agregue su contraseña:");
}
}

?>

</body>
</html>