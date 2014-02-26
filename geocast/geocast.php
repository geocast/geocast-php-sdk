<?php
/**
 * Copyright 2014 Geocast.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 * @link http://geocast.com.br/system/index.php/documentation
 * @author Geocast Team
 * @version 1.0
 *
 */
if (!function_exists('curl_init')) {
  throw new Exception('Geocast needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Geocast needs the JSON PHP extension.');
}
/**
 * Classe principal da Geocast.
 * Com ela é possível realizar todas as operações principais.
 *
 * @author Geocast
 **/
class Geocast
{
	private $key;
	private $webservice		= 'http://geocast.com.br/system/index.php/api/';
	private $params			= array();
	private $format			= 'json';
	
	public function __construct($key)
	{
		$this->key = $key;
	}
	
	/**
	 * Função API - Utilize a função para chamar os métodos da API Geocast.
	 * Observe atentamente os argumentos na documentação (http://www.geocast.com.br/system/index.php/documentation)
	 *
	 * @return mixed
	 * @author Geocast
	 **/
	public function api($method)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $this->webservice);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $this->get_data());
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		
		$xml = curl_exec($curl);
		curl_close($curl);
	}
	
	private function get_data()
	{
		$return =	'api=' . $this->key;
		$return .=	'frm='
		foreach ($params as $key => $param) {
			$return .= $key . '=' . $param . '&'
		}
	}
	
	// gett e sett
	public function set_params($params)
	{
		if (!is_array($params))
			return;
		
		$this->params = $params;
	}
	
} // END class
?>