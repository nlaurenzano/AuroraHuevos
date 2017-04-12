<?php 
require_once('../php/funciones.php');

$whatToDo = $_POST['doWhat'];

switch ($whatToDo) {
	case 'SendContactEmail':
		SendContactEmail();
		break;

	default:
		# code...
		break;
}

?>