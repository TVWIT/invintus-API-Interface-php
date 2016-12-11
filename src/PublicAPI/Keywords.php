<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5/keywords
	 */

	namespace Invintus\PublicAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Keywords extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $keywordID;

		/**
		 * @param mixed $keywordID
		 * @return $this;
		 */
		public function setKeywordID($keywordID)
		{
			$this->keywordID = $keywordID;
			$this->params['keywordID'] = $keywordID;
			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/keywords/keywords-get
		 */
		public function getKeywords(){
			try {
				return $this->makeCall("Keywords/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/keywords/keywords-get-by-id
		 */
		public function getKeywordsByID(){
			try {
				return $this->makeCall("Keywords/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
	}