<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5
	 */

	namespace Invintus;
	/**
	 * Class InvintusAPI
	 * @package Invintus
	 */
	class InvintusAPI
	{
		/**
		 * @var
		 */
		protected $callTimeout = 10;
		/**
		 * @param integer $callTimeout max 30 seconds, default is 10 seconds
		 * @return $this
		 */
		public function setCallTimeout($callTimeout)
		{
			$this->callTimeout = ((integer)$callTimeout > 30)?30:$callTimeout;
			return $this;
		}

		/**
		 * @var
		 */
		protected $payloadAuth;
		/**
		 * @var string
		 */
		protected $pubBaseURI = "https://api.v3.invintusmedia.com/v2/";
		/**
		 * @var string
		 */
		protected $crudBaseURI = "https://crud.v3.invintusmedia.com/";
		/**
		 * @var array
		 */
		protected $params;
		/**
		 * @var
		 */
		protected $clientID;
		/**
		 * @var
		 */
		protected $api_key;
		/**
		 * @var
		 */
		protected $vendor;
		/**
		 * @var
		 */
		protected $eventID;

		/**
		 * InvintusAPI constructor.
		 * @param string $api_key
		 * @param array $param_array
		 * @param string $vendor
		 */
		public function __construct($api_key = null, array $param_array = array(), $vendor = null)
		{
			if (!is_null($vendor)) {
				$this->payloadAuth['vendor'] = $vendor;
			}
			if (!is_null($api_key)) {
				$this->payloadAuth['api_key'] = $api_key;
			}
			//set json params as array
			if (!empty($param_array)) {
				$this->params = $param_array;
			}


		}

		/**
		 * @param mixed $api_key
		 * @return $this
		 */
		public function setApiKey($api_key)
		{
			$this->payloadAuth['api_key'] = $api_key;

			return $this;
		}

		/**
		 * @param mixed $vendor
		 * @return $this
		 */
		public function setVendor($vendor)
		{
			$this->payloadAuth['vendor'] = $vendor;

			return $this;
		}

		/**
		 * @return mixed
		 */
		protected function getClientID()
		{
			return $this->clientID;
		}

		/**
		 * @param mixed $clientID
		 * @return $this
		 */
		public function setClientID($clientID)
		{
			$this->clientID           = $clientID;
			$this->params['clientID'] = $clientID;

			return $this;
		}

		/**
		 * @return mixed
		 */
		protected function getEventID()
		{
			return $this->eventID;
		}

		/**
		 * @param mixed $eventID
		 * @return $this
		 */
		public function setEventID($eventID)
		{
			$this->params['eventID'] = $eventID;

			return $this;
		}

		/**
		 * @param $auth
		 */
		protected function setAuth($auth)
		{
			$this->payloadAuth = $auth;
		}

		/**
		 * @return mixed
		 */
		protected function getParams()
		{
			return $this->params;
		}

		/**
		 * @param $params
		 * @return $this
		 */
		public function setParams($params)
		{
			$this->params = $params;

			return $this;
		}

		public function showCallParamsJson(){
			return json_encode($this->params);
		}

		/**
		 * @param $endpointBase
		 * @param $endPoint
		 * @param $data
		 * @return object
		 */
		protected function makeCall($endpointBase, $endPoint, $data)
		{
			//echo $data; exit;
			$ch = curl_init();
			//echo var_dump(isset($this->payloadAuth['vendor']));exit;
			// isset($this->payloadAuth['vendor'])?$this->payloadAuth['vendor']:$this->payloadAuth['api_key']
			$auth = isset($this->payloadAuth['vendor']) ? $this->payloadAuth['vendor'] : $this->payloadAuth['api_key'];
			$vend = isset($this->payloadAuth['vendor']) ? 'Wsc-api-key: ' . $this->payloadAuth['api_key'] : '';
			curl_setopt($ch, CURLOPT_HTTPHEADER, [
							   'Content-Type: application/json',
							   'Authorization: ' . $auth,
							   $vend,
							   'Content-Length: ' . strlen($data),
						   ]
			);
			curl_setopt($ch, CURLOPT_URL, $endpointBase . $endPoint);
			curl_setopt($ch, CURLOPT_TIMEOUT, $this->callTimeout);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true); // enable tracking
			$resp       = curl_exec($ch);
			$headerSent = curl_getinfo($ch, CURLINFO_HEADER_OUT); // request headers
			//return $headerSent;
			if (!$resp) {
				return (object) array("hasError" => true, 'message' => curl_error($ch));
			}
			curl_close($ch);
			//return $headerSent;
			//check for errors from api or core
			$respArray = json_decode($resp);

			if ($respArray->errors->hasError) {
				return $respArray->errors;
			}
			if (is_null($respArray->data)) {
				return $respArray->meta;
			}
			return $respArray;
		}
	}