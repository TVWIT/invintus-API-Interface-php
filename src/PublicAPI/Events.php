<?php
	/**
	 * Created by PhpStorm.
	 * User: scottf
	 * Date: 12/8/16
	 * Time: 10:32 AM
	 */

	namespace Invintus\PublicAPI;


	use Invintus\InvintusAPI;

	class Events extends InvintusAPI
	{

		public function getBasic()
		{
			try {
				return $this->makeCall("Event/".__FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
					return $e->getMessage();
			}

		}
	}