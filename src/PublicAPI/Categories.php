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
	class Categories extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $categoryDescription;
		/**
		 * @var
		 */
		protected $categoryID;
		/**
		 * @var
		 */
		protected $categoryName;
		/**
		 * @var
		 */
		protected $parentID;

		/**
		 * @param string $categoryDescription
		 * @return $this
		 */
		public function setCategoryDescription($categoryDescription)
		{
			$this->categoryDescription           = $categoryDescription;
			$this->params['categoryDescription'] = $categoryDescription;

			return $this;
		}

		/**
		 * @param integer $categoryID
		 * @return $this
		 */
		public function setCategoryID($categoryID)
		{
			$this->categoryID           = $categoryID;
			$this->params['categoryID'] = $categoryID;

			return $this;
		}

		/**
		 * @param string $categoryName
		 * @return $this
		 */
		public function setCategoryName($categoryName)
		{
			$this->categoryName           = $categoryName;
			$this->params['categoryName'] = $categoryName;

			return $this;
		}

		/**
		 * @param integer $parentID
		 * @return $this
		 */
		public function setParentID($parentID)
		{
			$this->parentID           = $parentID;
			$this->params['parentID'] = $parentID;

			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/categories/categories-get
		 */
		public function getCategories()
		{
			try {
				return $this->makeCall("Categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/categories/categories-by-description
		 */
		public function getCategoryByDescription()
		{
			try {
				return $this->makeCall("Categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/categories/categories-by-id
		 */
		public function getCategoryByID()
		{
			try {
				return $this->makeCall("Categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/categories/categories-by-name
		 */
		public function getCategoryByName()
		{
			try {
				return $this->makeCall("Categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/categories/categories-by-parent
		 */
		public function getCategoryByParent()
		{
			try {
				return $this->makeCall("Categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

	}