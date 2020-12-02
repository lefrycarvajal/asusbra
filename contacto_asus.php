<?php
include("db_conexion.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
   
	   strlen($_POST['telefono']) >= 1 &&

	   strlen($_POST['correo']) >= 1 && 
	   
	   strlen($_POST['contrasena']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$telefono = trim($_POST['telefono']);
		$correo = trim($_POST['correo']);
		$contrasena = trim($_POST['contrasena']);
		$consulta = "INSERT INTO compras(nombre, telefono, correo, contrasena) VALUES ('$nombre','$telefono','$correo','$contrasena')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">Hemos recibido sus datos le enviaremos la informacion de inmediato.</h3>
<?php
		} else {
			?>
	<h3 class="bad">Hemos estado presentando problemas con su solicitud intentalo de nuevo</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">Rellene los campos porfavor</h3>
			<?php
			
		}
		
}
	



?>


