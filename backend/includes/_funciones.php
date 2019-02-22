<?php  
require_once '_db.php';
if(isset($_POST["accion"])){
	switch ($_POST["accion"]) {
		case 'login':
		login();
		break;

		default:
		break;
	}
}
function login(){
		// Recibir y Sanear las variables
		// Conectar a la base de datos
		// Verificar si existe usuario
			// Si el usuario existe
					// Si la contraseña es válida, imprimir 1
					// Si la contraseña no es válida, imprimir un 0
			// Si el usuario no existe, imprimir un 2
		// Cerrar la conexión
}
?>