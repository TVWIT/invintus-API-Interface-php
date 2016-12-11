<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5/locations
	 */

	namespace Invintus\PublicAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Locations extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $locationID;

		/**
		 * @param mixed $locationID
		 * @return $this;
		 */
		public function setLocationID($locationID)
		{
			$this->locationID = $locationID;
			$this->params['locationID'] = $locationID;
			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/locations/locations-get
		 */
		public function getLocations(){
			try {
				return $this->makeCall("Locations/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/locations/locations-by-id
		 */
		public function getLocationsByID(){
			try {
				return $this->makeCall("Locations/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

	}