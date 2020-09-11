<?php
header('Content-Type: application/json; charset=utf-8');

require_once 'classes/Main.php';

class Rest
{
	public static function open($requisicao)
	{
		$token = "21232f297a57a5a743894a0e4a801fc3";
		if($token == $_GET["token"]){
			$url = explode('/', $requisicao['url']);
			
			$classe = ucfirst($url[0]);
			array_shift($url);

			$metodo = $url[0];
			array_shift($url);

			$parametros = array();
			$parametros = $url;

			try {
				if (class_exists($classe)) {
					if (method_exists($classe, $metodo)) {
						$retorno = call_user_func_array(array(new $classe, $metodo), $parametros);

						return json_encode(array('status' => 'sucesso', 'dados' => $retorno));
					} else {
						return json_encode(array('status' => 'erro', 'msg' => 'Método inexistente!'));
					}
				} else {
					return json_encode(array('status' => 'erro', 'msg' => 'Classe inexistente!'));
				}	
			} catch (Exception $e) {
				return json_encode(array('status' => 'erro', 'msg' => $e->getMessage()));
			}
		}else{
			return json_encode(array('status' => 'erro', 'msg' => 'Token invalido'));
		}
	}
}

if (isset($_REQUEST)) {
	echo Rest::open($_REQUEST);
}