<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * CRUD API only available to Authorized vendors with a valid key.
	 * for more informatio,contact support@invintus.com
	 * View documentation at https://invintus-crud.api-docs.io/v2.5/events
	 * auth required for docs
	 */

	namespace Invintus\CrudAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Event
	 * @package Invintus\PublicAPI
	 */
	class Events extends InvintusAPI
	{
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
		protected $title;
		/**
		 * @var
		 */
		protected $description;
		/**
		 * @var
		 */
		protected $categories;
		/**
		 * @var
		 */
		protected $keywords;
		/**
		 * @var
		 */
		protected $encoderID;
		/**
		 * @var
		 */
		protected $liveCaptions;
		/**
		 * @var
		 */
		protected $location;
		/**
		 * @var
		 */
		protected $technicians;
		/**
		 * @var
		 */
		protected $playerPrefID;
		/**
		 * @var
		 */
		protected $metaMarkers;
		/**
		 * @var
		 */
		protected $customID;

		/**
		 * @var
		 */
		protected $eventStatus;

		/**
		 * @var
		 */
		protected $private;
		/**
		 * @var
		 */
		protected $autoStart;

		protected $preroll;

		protected $forceCreate;
		/**
		 * @param boolean $forceCreate
		 * @return $this
		 */
		public function forceCreate($forceCreate = false)
		{
			if ($forceCreate){
				$this->forceCreate = true;
				$this->params['forceCreate'] = true;
			}
			return $this;
		}


		/**
		 * @param mixed $preroll
		 * @return $this
		 */
		public function setPreroll($preroll)
		{
			$this->preroll = $preroll;
			$this->params['preroll'] = $preroll;
			return $this;
		}

		/**
		 * @param mixed $private
		 *  @return $this
		 */
		public function setPrivate($private)
		{
			$this->private = $private;
			$this->params['private'] = $private;
			return $this;
		}

		/**
		 * @param mixed $autoStart
		 *  @return $this
		 */
		public function setAutoStart($autoStart)
		{
			$this->autoStart = $autoStart;
			$this->params['autoStart'] = $autoStart;
			return $this;
		}

		/**
		 * @param mixed $eventStatus
		 *  @return $this
		 */
		public function setEventStatus($eventStatus)
		{
			$this->eventStatus = $eventStatus;
			$this->params['eventStatus'] = $eventStatus;
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
		 * @param array $categories WARNING! MUST include all currently assigned categories, Use Categories class for adding or removing individual global categories
		 * @return $this
		 */
		public function setCategories(array $categories)
		{
			$this->categories           = $categories;
			$this->params['categories'] = $categories;

			return $this;
		}

		/**
		 * @param array $keywords WARNING! MUST include all currently assigned keywords, Use Keywords class for adding or removing individual global Keywords
		 * @return $this
		 */
		public function setKeywords(array $keywords)
		{
			$this->keywords           = $keywords;
			$this->params['keywords'] = $keywords;

			return $this;

		}

		/**
		 * @param string $encoderID
		 * @return $this
		 */
		public function setEncoderID($encoderID)
		{
			$this->encoderID           = $encoderID;
			$this->params['encoderID'] = $encoderID;

			return $this;
		}

		/**
		 * @param mixed $liveCaptions
		 * @return $this
		 */
		public function setLiveCaptions($liveCaptions)
		{
			$this->liveCaptions            = $liveCaptions;
			$this->params['startDateTime'] = $startDateTime;

			return $this;
		}

		/**
		 * @param mixed $location
		 * @return $this
		 */
		public function setLocation($location)
		{
			$this->location           = $location;
			$this->params['locationID'] = $location;

			return $this;
		}

		/**
		 * @param array $technicians WARNING! array MUST include all currently assigned technicians, Use Technicians class for adding or removing individual global technicians
		 * @return $this
		 */
		public function setTechnicians(array $technicians)
		{
			$this->technicians           = $technicians;
			$this->params['technicians'] = $technicians;

			return $this;
		}

		/**
		 * @param integer $playerPrefID
		 * @return $this
		 */
		public function setPlayerPrefID($playerPrefID)
		{
			$this->playerPrefID           = $playerPrefID;
			$this->params['playerPrefID'] = $playerPrefID;

			return $this;
		}

		/**
		 * @param array $metaMarkers WARNING! array MUST include all currently assigned metaMarker array objects.
		 * @return $this
		 */
		public function setMetaMarkers(array $metaMarkers)
		{
			$this->metaMarkers           = $metaMarkers;
			$this->params['metaMarkers'] = $metaMarkers;

			return $this;
		}

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
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/events/events-add
		 */
		public function add()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "events/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/events/events-update
		 */
		public function update()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "events/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus-crud.api-docs.io/v2.5/events/events-delete
		 */
		public function delete()
		{
			try {
				return $this->makeCall($this->crudBaseURI, "events/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
		//TODO: Add event/start & event/stop


	}