<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/thumbs
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Thumbs extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $assetID;

		/**
		 * @param mixed $assetID
		 * @return $this
		 */
		public function setAssetID($assetID)
		{
			$this->assetID = $assetID;
			$this->params['assetID'] = $assetID;

			return $this;
		}

		/**
		 * @param mixed $timecode format hh:mm:ss
		 * @return $this
		 */
		public function setTimecode($timecode)
		{
			$this->timecode = $timecode;
			$this->params['timecode'] = $timecode;

			return $this;
		}

		/**
		 * @var
		 */
		protected $timecode;
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/thumbs/thumbnail-replace-at-timecode
		 */
		public function replace()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "Thumbs/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

	}