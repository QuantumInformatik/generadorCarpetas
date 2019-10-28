<?php 
error_reporting(0);

/**
 * 
 */
class GeneradorServices
{
	
	function __construct(){
	}

	public static function obtenerRaiz(){
		return "c:/";
	}	
	public static function obtenerCarpetaOrigen(){
		return "proyecto-analisis/";
	}


	public static function generarCarpetas($generador){

		$carpetaDestino = $generador->carpetaDestino;
		$cambiosGit = $generador->cambiosGit;
		return self::lecturaCambiosGit($cambiosGit, $carpetaDestino);

	}

	public static function lecturaCambiosGit($cambiosGit, $carpetaDestino){
		$pilaErrores = array("contador" => 0, "errores" => array());

		if (!file_exists("../../".$carpetaDestino)) {
			self::crearCarpeta("../../".$carpetaDestino);
		}
		$cambiosFormateados = rawurlencode($cambiosGit);
 		$cambiosFormateados = rawurldecode(str_replace("%0D%0A",",",$cambiosFormateados));
		$vecCambios = explode(",", $cambiosFormateados);

		foreach ($vecCambios as $valor) {
		
			$caso = self::obtenerCaso(trim($valor));
			if ($caso[0]!='deleted') {
				if (!file_exists("../../".$carpetaDestino."/".trim($caso[1]))) {
					self::crearCarpeta("../../".$carpetaDestino."/".trim($caso[1]));
				}

				$path="c:/Users/User/IdeaProjects/".self::obtenerCarpetaOrigen();

				 $origen = $path.trim($caso[2]);
				 $destino = "c:/xampp/htdocs/generador_carpetas/".$carpetaDestino."/".trim($caso[2]);
				
				if (!empty($caso[0])) {
					$raiz = self::obtenerRaiz();
					if (!copy( $origen,  $destino)) {
					    // echo "Error al copiar Users/User/IdeaProjects/".self::obtenerCarpetaOrigen().$caso[2]."...\n";
					    $pilaErrores["contador"]++;
					    array_push($pilaErrores["errores"], $origen);
					}
				}				
			}
		}
		return $pilaErrores;
	
	}

	public static function obtenerCaso($cadena){
		$caso = strstr($cadena, ':', true);
		$archivo = substr($cadena, stripos($cadena,":")+3);
		$ruta = substr($archivo, 0,strrpos($archivo, "/"));

		return array($caso, $ruta,$archivo);
	
	}

	public static function crearCarpeta($carpetaDestino){

		if(!mkdir($carpetaDestino, 0755, true)) {
		    die('Fallo al crear las carpetas...');
		}	


	}


}


 ?>