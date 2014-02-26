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
	public function api($method, $params=array())
	{
		
	}
	
} // END class
?>