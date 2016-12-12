<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/metamarkers
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;
	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */

	class MetaMarkers extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $start;
		/**
		 * @var
		 */
		protected $itemText;
		/**
		 * @var
		 */
		protected $publishedAssetID;
		/**
		 * @var
		 */
		protected $itemTitle;
		/**
		 * @var
		 */
		protected $childOf;
		/**
		 * @var
		 */
		protected $header;
		/**
		 * @var
		 */
		protected $markerID;

		/**
		 * @param mixed $markerID
		 * @return $this
		 */
		public function setmarkerID($markerID)
		{
			$this->markerID = $markerID;
			$this->params['marker']['markerID'] = $markerID;

			return $this;
		}

		/**
		 * @param mixed $start
		 * @return $this
		 */
		public function setStart($start)
		{
			$this->start = $start;
			$this->params['marker']['start'] = $start;

			return $this;
		}

		/**
		 * @param mixed $itemText
		 *  @return $this
		 */
		public function setItemText($itemText)
		{
			$this->itemText = $itemText;
			$this->params['marker']['itemText'] = $itemText;

			return $this;
		}

		/**
		 * @param mixed $publishedAssetID
		 *  @return $this
		 */
		public function setPublishedAssetID($publishedAssetID)
		{
			$this->publishedAssetID = $publishedAssetID;
			$this->params['marker']['publishedAssetID'] = $publishedAssetID;

			return $this;
		}

		/**
		 * @param mixed $itemTitle
		 *  @return $this
		 */
		public function setItemTitle($itemTitle)
		{
			$this->itemTitle = $itemTitle;
			$this->params['marker']['itemTitle'] = $itemTitle;

			return $this;
		}

		/**
		 * @param mixed $childOf
		 *  @return $this
		 */
		public function setChildOf($childOf)
		{
			$this->childOf = $childOf;
			$this->params['marker']['childOf'] = $childOf;

			return $this;
		}

		/**
		 * @param mixed $header
		 * @return $this
		 */
		public function setHeader($header)
		{
			$this->header = $header;
			$this->params['marker']['header'] = $header;

			return $this;
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/metamarkers/meta-markers-add
		 */
		public function add()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "metamarkers/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/metamarkers/meta-markers-update
		 */
		public function update()
		{
			try {

				return $this->makeCall($this->crudBaseURI, "metamarkers/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/metamarkers/meta-markers-delete
		 */
		public function delete()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "metamarkers/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}


	}