<?php
	/**
	 * Created by PhpStorm.
	 * User: scottf
	 * Date: 12/11/16
	 * Time: 12:20 AM
	 */

	namespace Invintus\PublicAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Listings extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $customID;
		/**
		 * @var
		 */
		protected $resultPage;
		/**
		 * @var
		 */
		protected $resultMax;
		/**
		 * @var
		 */
		protected $sortBy;
		/**
		 * @var
		 */
		protected $AndOr;
		/**
		 * @var
		 */
		protected $startDateTime;
		/**
		 * @var
		 */
		protected $stopDateTime;
		/**
		 * @var
		 */
		protected $status;
		/**
		 * @var
		 */
		protected $includePrivate;
		/**
		 * @var
		 */
		protected $getLive;
		/**
		 * @var
		 */
		protected $getOnlyPrivate;
		/**
		 * @var
		 */
		protected $events;
		/**
		 * @var
		 */
		protected $title;
		/**
		 * @var
		 */
		protected $description;
		/**
		 * @var
		 */
		protected $category;
		/**
		 * @var
		 */
		protected $location;
		/**
		 * @var
		 */
		protected $keywords;
		/**
		 * @var
		 */
		protected $showStreams;
		/**
		 * @var
		 */
		protected $showEncoder;
		/**
		 * @var
		 */
		protected $showMediaAssets;
		/**
		 * @var
		 */
		protected $showMediaDetails;

		/**
		 * @param string $customID
		 * @return $this
		 */
		public function setCustomID($customID)
		{
			$this->customID           = $customID;
			$this->params['customID'] = $customID;

			return $this;

		}

		/**
		 * @param integer $resultPage
		 * @return $this
		 */
		public function setResultPage($resultPage)
		{
			$this->resultPage           = $resultPage;
			$this->params['resultPage'] = $resultPage;

			return $this;
		}

		/**
		 * @param integer $resultMax
		 * @return $this
		 */
		public function setResultMax($resultMax)
		{
			$this->resultMax           = $resultMax;
			$this->params['resultMax'] = $resultMax;

			return $this;
		}

		/**
		 * @param string $sortBy
		 * @return $this
		 */
		public function setSortBy($sortBy)
		{
			$this->sortBy           = $sortBy;
			$this->params['sortBy'] = $sortBy;

			return $this;
		}

		/**
		 * @param string $AndOr
		 * @return $this
		 */
		public function setAndOr($AndOr)
		{
			$this->AndOr           = $AndOr;
			$this->params['AndOr'] = $AndOr;

			return $this;
		}

		/**
		 * @param string $startDateTime format YYYY-MM-DD hh:mm AM/PM
		 * @return $this
		 */
		public function setStartDateTime($startDateTime)
		{
			$this->startDateTime           = $startDateTime;
			$this->params['startDateTime'] = $startDateTime;

			return $this;
		}

		/**
		 * @param string $stopDateTime format YYYY-MM-DD hh:mm AM/PM
		 * @return $this
		 */
		public function setStopDateTime($stopDateTime)
		{
			$this->stopDateTime           = $stopDateTime;
			$this->params['stopDateTime'] = $stopDateTime;
			return $this;
		}

		/**
		 * @param boolean $includePrivate
		 * @return $this
		 */
		public function setIncludePrivate($includePrivate)
		{
			$this->includePrivate           = $includePrivate;
			$this->params['includePrivate'] = $includePrivate;

			return $this;
		}

		/**
		 * @param boolean $getLive
		 * @return $this
		 */
		public function setGetLive($getLive)
		{
			$this->getLive           = $getLive;
			$this->params['getLive'] = $getLive;

			return $this;
		}

		/**
		 * @param boolean $getOnlyPrivate
		 * @return $this
		 */
		public function setGetOnlyPrivate($getOnlyPrivate)
		{
			$this->getOnlyPrivate           = $getOnlyPrivate;
			$this->params['getOnlyPrivate'] = $getOnlyPrivate;

			return $this;
		}

		/**
		 * @param array $events
		 * @return $this
		 */
		public function setEvents(array $events)
		{
			$this->events           = $events;
			$this->params['events'] = $events;

			return $this;
		}

		/**
		 * @param string $title
		 * @return $this
		 */
		public function setTitle($title)
		{
			$this->title           = $title;
			$this->params['title'] = $title;

			return $this;
		}

		/**
		 * @param string $description
		 * @return $this
		 */
		public function setDescription($description)
		{
			$this->description           = $description;
			$this->params['description'] = $description;

			return $this;
		}

		/**
		 * @param string $category
		 * @return $this
		 */
		public function setCategory($category)
		{
			$this->category           = $category;
			$this->params['category'] = $category;

			return $this;
		}

		/**
		 * @param string $location
		 * @return $this
		 */
		public function setLocation($location)
		{
			$this->location           = $location;
			$this->params['location'] = $location;

			return $this;
		}

		/**
		 * @param string $keywords
		 * @return $this
		 */
		public function setKeywords($keywords)
		{
			$this->keywords           = $keywords;
			$this->params['keywords'] = $keywords;

			return $this;
		}

		/**
		 * @param boolean $showStreams
		 * @return $this
		 */
		public function setShowStreams($showStreams)
		{
			$this->showStreams           = $showStreams;
			$this->params['showStreams'] = $showStreams;

			return $this;
		}

		/**
		 * @param boolean $showEncoder
		 * @return $this
		 */
		public function setShowEncoder($showEncoder)
		{
			$this->showEncoder           = $showEncoder;
			$this->params['showEncoder'] = $showEncoder;

			return $this;
		}

		/**
		 * @param boolean $showMediaAssets
		 * @return $this
		 */
		public function setShowMediaAssets($showMediaAssets)
		{
			$this->showMediaAssets           = $showMediaAssets;
			$this->params['showMediaAssets'] = $showMediaAssets;

			return $this;
		}

		/**
		 * @param boolean $showMediaDetails
		 * @return $this
		 */
		public function setshowMediaDetails($showMediaDetails)
		{
			$this->showMediaDetails           = $showMediaDetails;
			$this->params['showMediaDetails'] = $showMediaDetails;

			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/listings/listings-get-status
		 */
		public function getStatus()
		{
			try {
				return $this->makeCall($this->pubBaseURI, "Listings/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @param string $status
		 * @return $this
		 */
		public function setStatus($status)
		{
			$this->status           = $status;
			$this->params['status'] = $status;

			return $this;
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/listings/listings-get-basic
		 */
		public function getBasic()
		{
			try {
				return $this->makeCall($this->pubBaseURI, "Listings/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/listings/listings-get-detailed
		 */
		public function getDetailed()
		{
			try {
				$this->params['showMediaAssets'] = true;
				$this->params['showMediaDetails'] = true;
				$this->params['showEncoder']     = true;
				return $this->makeCall($this->pubBaseURI, "Listings/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
        /**
         * @return object|string
         * abstracted from a legacy API v1 call: evenGetStatus
         */
		public function getStatus48hrs()
        {
            return $this->makeCall($this->pubBaseURI, "Listings/" . __FUNCTION__, json_encode($this->params));
        }

	}