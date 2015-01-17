<?php
class Funciones extends CApplicationComponent{

	public function init(){
		// init es llamado por Yii, debido a que es un componente.
	}


	public function validarSession(array $sesiones)
	{
		if(is_array($sesiones))
		{
			foreach ($sesiones AS $key=>$value)
			{
				if(Yii::app()->user->checkAccess($value))
				{
					return true;
				}
			}
		}

		return false;
	}
	
	
	public function porcentaje($val,$cod)
	{
		$porce = 0;
		switch ($cod)
		{
			case 1:
			case 2:
				$porce = 25;
				break;
			case 3:
				$porce = 20;
				break;
			case 4:
				$porce = 20;
				break;
			case 5:
				$porce = 10;
				break;
		}
	
		return ($val*$porce)/100;
	}
	
	
	/** 
	 * Función que valida si es un numero el recibido por parámetro.
	 * @param integer $value
	 * @return boolean true si es un numero el ingresado**/
	public function my_is_numeric($value)
	{
		return (preg_match ("/\A(-){0, 1}([0-9]+)((,|.)[0-9]{3, 3})*((,|.)[0-9]){0, 1}([0-9]*)\z/" ,$value) == 1);
	}
	
	function send_request($onlineresource) 
	{
		$ch = curl_init();
		$timeout = 5; // set to zero for no timeout
	
		// fix to allow HTTPS connections with incorrect certificates
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	
		curl_setopt ($ch, CURLOPT_URL,$onlineresource);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt ($ch, CURLOPT_ENCODING , "gzip, deflate");
	
		$file_contents = curl_exec($ch);
		curl_close($ch);
		$lines = array();
		$lines = explode("\n", $file_contents);
		if(!($response = $lines)) {
			echo "Unable to retrieve file '$service_request'";
		}
		$response = implode("",$response);
		return $response;
	}
	
}
?>
