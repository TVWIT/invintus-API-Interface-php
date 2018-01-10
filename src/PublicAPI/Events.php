<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5/event
	 */

	namespace Invintus\PublicAPI;


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
		public $showStreams;
		/**
		 * @var
		 */
		protected $customID;
        /**
         * @var
         */
        protected $showRuntime;
        /**
         * @var
         */
        protected $isConsole;

        /**
         * @param boolean $showRuntime
         *  @return $this
         */
        public function setShowRuntime($showRuntime)
        {
            $this->showRuntime = $showRuntime;
            $this->params['showRuntime'] = $showRuntime;

            return $this;
        }

        /**
         * @param boolean $isConsole
         * @return $this
         */
        public function setIsConsole($isConsole)
        {
            $this->isConsole = $isConsole;
            $this->params['isConsole'] = $isConsole;

            return $this;
        }

		/**
		 * @param mixed $customID
		 * @return $this
		 */
		public function setCustomID($customID)
		{
			$this->customID = $customID;
			$this->params['customID'] = $customID;
			return $this;
		}

		/**
		 * @param mixed $showStreams
		 * @return $this
		 */
		public function setShowStreams($showStreams)
		{
			$this->showStreams = $showStreams;
			$this->params['showStreams'] = $showStreams;
			return $this;
		}

		/**
		 * @return mixed|string
		 * docs https://invintus.api-docs.io/v2.5/event/event-get-basic
		 */
		public function getBasic()
		{
			try {
				return $this->makeCall($this->pubBaseURI, "Event/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * dosc https://invintus.api-docs.io/v2.5/event/event-get-detailed
		 */
		public function getDetailed()
		{
			try {
				$this->params['showMediaAssets']  = true;
				$this->params['showMediaDetails'] = true;
				$this->params['getLive']          = true;
				return $this->makeCall($this->pubBaseURI, "Event/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/event/event-get-status
		 */
		public function getStatus()
		{
			try {
				return $this->makeCall($this->pubBaseURI, "Event/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/event/event-streaming-uri-s
		 */
		public function getStreamLinks()
		{
			try {
				return $this->makeCall($this->pubBaseURI, "Event/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}
	}