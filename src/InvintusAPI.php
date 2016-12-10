<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * Date: 12/8/16
	 * Time: 9:35 AM
	 */

	namespace Invintus;
	class InvintusAPI
	{
		public $payloadAuth;
		public $pubBaseURI = "https://api.v3.invintusmedia.com/v2/";
		public $guzClient;
		public $params;

		/**
		 * @param $auth
		 */
		public function setAuth($auth)
		{
			$this->payloadAuth = $auth;
		}
		/**
		 * @return mixed
		 */
		public function getParams()
		{
			return $this->params;
		}
		public function setParams($params){
			$this->params = $params;
		}


		/**
		 * InvintusAPI constructor.
		 * @param string $api_key
		 * @param array $param_array
		 */
		public function __construct($api_key, array $param_array)
		{
			$this->payloadAuth = $api_key;
			$this->params = $param_array;

		}
		function makeCall($endPoint, $data){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
							   "Content-Type: application/json",
							   //"Authorization: console",
							   "wsc-api-key: ". $this->payloadAuth,
						   ]
			);
			curl_setopt($ch, CURLOPT_URL, $this->pubBaseURI . $endPoint);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$resp = curl_exec($ch);
			if (!$resp) {
				trigger_error(json_encode(curl_error($ch)), E_USER_ERROR);
			}
			curl_close($ch);
			//check for errors from api or core
			$respCheck = json_decode($resp);

			if ($respCheck->errors->hasError){
				//return $this->e->error($respCheck->errors->message, 400);
			}
			return $resp;
		}
	}