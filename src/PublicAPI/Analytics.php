<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5/analytics
	 */
	namespace Invintus\PublicAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Analytics extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $startDate;
		/**
		 * @var
		 */
		protected $endDate;

		/**
		 * @param string $startDate
		 * @return $this
		 */
		public function setStartDate($startDate)
		{
			$startDate                 = date('Y-m-d', strtotime($startDate));
			$this->startDate           = $startDate;
			$this->params['startDate'] = $startDate;

			return $this;
		}

		/**
		 * @param string $endDate
		 * @return $this
		 */
		public function setEndDate($endDate)
		{
			$endDate                 = date('Y-m-d', strtotime($endDate));
			$this->endDate           = $endDate;
			$this->params['endDate'] = $endDate;

			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/analytics/analytics-get
		 */
		public function getAnalytics()
		{
			try {
				return $this->makeCall("Analytics/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/analytics/analytics-most-watched
		 */
		public function getMostWatched()
		{
			try {
				return $this->makeCall("Analytics/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/analytics/analytics-storage-usage-to-date
		 */
		public function getStorageUsage()
		{
			try {
				return $this->makeCall("Analytics/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/analytics/analytics-bandwitdh-usage
		 */
		public function getBandwidthUsage()
		{
			try {
				return $this->makeCall("Analytics/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/analytics/analytics-bandwidth-usage-by-event
		 */
		public function getBandwidthUsageByEvent()
		{
			try {
				return $this->makeCall("Analytics/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
	}