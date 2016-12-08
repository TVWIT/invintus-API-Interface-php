<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * Date: 12/8/16
	 * Time: 9:35 AM
	 */

	namespace InvintusAPI\Common;
	use Guzzle\Http\Client;

	class InvintusAPI
	{
		private $payloadAuth;

		/**
		 * @param $auth
		 */
		public function setAuth($auth)
		{
			$this->payloadAuth = $auth;
		}

		/**
		 * InvintusAPI constructor.
		 * @param $auth
		 */
		public function __construct($auth)
		{
			$this->payloadAuth = $auth;
		}
	}