<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/location
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Location extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $locationName;
		/**
		 * @var
		 */
		protected $locationID;
		/**
		 * @var
		 */
		protected $locationDescription;
		/**
		 * @var
		 */
		protected $locationAddress;
		/**
		 * @var
		 */
		protected $locationContact;
		/**
		 * @var
		 */
		protected $locationPhone;

		/**
		 * @param mixed $locationDescription
		 * @return $this
		 */
		public function setLocationDescription($locationDescription)
		{
			$this->locationDescription           = $locationDescription;
			$this->params['locationDescription'] = $locationDescription;

			return $this;
		}

		/**
		 * @param mixed $locationAddress
		 * @return $this
		 */
		public function setLocationAddress($locationAddress)
		{
			$this->locationAddress        = $locationAddress;
			$this->params['locationName'] = $locationAddress;

			return $this;
		}

		/**
		 * @param mixed $locationContact
		 * @return $this
		 */
		public function setLocationContact($locationContact)
		{
			$this->locationContact           = $locationContact;
			$this->params['locationContact'] = $locationContact;

			return $this;
		}

		/**
		 * @param mixed $locationPhone
		 * @return $this
		 */
		public function setLocationPhone($locationPhone)
		{
			$this->locationPhone           = $locationPhone;
			$this->params['locationPhone'] = $locationPhone;

			return $this;
		}

		/**
		 * @param string $locationName
		 * @return $this
		 */
		public function setLocationName($locationName)
		{
			$this->locationName           = $locationName;
			$this->params['locationName'] = $locationName;

			return $this;
		}

		/**
		 * @param integer $locationID
		 * @return $this
		 */
		public function setLocationID($locationID)
		{
			$this->locationID           = $locationID;
			$this->params['locationID'] = $locationID;

			return $this;
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/location/location-add
		 */
		public function add()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "location/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/location/location-update
		 */
		public function update()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "location/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/location/location-delete
		 */
		public function delete()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "location/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
	}