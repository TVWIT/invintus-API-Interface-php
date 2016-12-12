<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/keywords
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;

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
		protected $keyword;
		/**
		 * @var
		 */
		protected $keywordID;

		/**
		 * @param string $keyword
		 * @return $this
		 */
		public function setKeyword($keyword)
		{
			$this->keyword = $keyword;
			$this->params['keyword'] = $keyword;

			return $this;
		}

		/**
		 * @param integer $keywordID
		 * @return $this
		 */
		public function setKeywordID($keywordID)
		{
			$this->keywordID = $keywordID;
			$this->params['keywordID'] = $keywordID;

			return $this;
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/keywords/keyword-add
		 */
		public function add()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "keywords/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/keywords/keyword-update
		 */
		public function update()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "keywords/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/keywords/keyword-delete
		 */
		public function delete()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "keywords/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}


	}