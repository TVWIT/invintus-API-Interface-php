<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/categories
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;

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
		protected $categoryName;
		/**
		 * @var
		 */
		protected $categoryDescription;
		/**
		 * @var
		 */
		protected $childOf;
		/**
		 * @var
		 */
		protected $categoryID;

		/**
		 * @param integer $categoryID
		 * @return $this
		 */
		public function setCategoryID($categoryID)
		{
			$this->categoryID = $categoryID;
			$this->params['categoryID'] = $categoryID;

			return $this;
		}

		/**
		 * @param string $categoryName
		 * @return $this
		 */
		public function setCategoryName($categoryName)
		{
			$this->categoryName = $categoryName;
			$this->params['categoryName'] = $categoryName;

			return $this;
		}

		/**
		 * @param string $categoryDescription
		 * @return $this
		 */
		public function setCategoryDescription($categoryDescription)
		{
			$this->categoryDescription = $categoryDescription;
			$this->params['categoryDescription'] = $categoryDescription;

			return $this;
		}

		/**
		 * @param integer $childOf
		 * @return $this
		 */
		public function setChildOf($childOf)
		{
			$this->childOf = $childOf;
			$this->params['childOf'] = $childOf;

			return $this;
		}


		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/categories/categories-add
		 */
		public function add()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/categories/categories-update
		 */
		public function update()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/categories/categories-delete
		 */
		public function delete()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "categories/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}


	}