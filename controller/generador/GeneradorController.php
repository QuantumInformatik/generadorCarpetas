<?php 
include("../../includes/generador/GeneradorIncludes.php");

if (!empty(($_POST["caso"]))) {
	$caso = ($_POST["caso"]);
}else{
	$caso = "";
}
$respuestaDevuleta = "";

switch ($caso) {
	case 'generarCarpetas':
		//print_r($_POST);
		$generador = new GeneradorCarpetas();
		$generador->carpetaDestino = $_POST["carpetaDestino"];
		$generador->cambiosGit = $_POST["cambiosGit"];

		$respuesta = GeneradorServices::generarCarpetas($generador);

		if ($respuesta["contador"]>0) {
			$respuestaDevuleta = array(
				"resultado" => 0,
				"contenido" => implode(", ", $respuesta["errores"])
			);

		}else{
			$respuestaDevuleta = array(
				"resultado" => 1,
				"contenido" => "Se generaron las carpetas correctamente. "
			);
		}

		break;
	
	default:
		# code...
		break;
}

echo json_encode($respuestaDevuleta);


 ?>