<?php
	/**
	 * API hooks for invintus API version 3.0
	 * User: Invintus
	 * View documentation at https://invintus.api-docs.io/v2.5/assets
	 */

	namespace Invintus\PublicAPI;

	use Invintus\InvintusAPI;

	/**
	 * Class Assets
	 * @package Invintus\PublicAPI
	 */
	class Assets extends InvintusAPI
	{
		/**
		 * @var
		 */
		protected $advancedDetails;

		/**
		 * @param $advancedDetails
		 * @return $this
		 */
		public function setAdvancedDetails($advancedDetails)
		{
			$this->advancedDetails = $advancedDetails;

			return $this;
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/asset-get-documents
		 */
		public function getDocumentAssets()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/asset-get-all
		 */
		public function getMediaAssets()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/assets-get-non-video
		 */
		public function getNonVideoAssets()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/assets-get-published
		 */
		public function getPublishedVideoAsset()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/assets-get-streaming-uri
		 */
		public function getStreamURIs()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * @return object|string
		 * docs https://invintus.api-docs.io/v2.5/assets/assets-get-misc-assets-global-assets
		 */
		public function getMiscAssets()
		{
			try {
				if (isset($this->showStreams)) $this->params['advancedDetails'] = $this->advancedDetails;

				return $this->makeCall($this->pubBaseURI, "Assets/" . __FUNCTION__, json_encode($this->params));
			}
			catch (\Exception $e) {
				return $e->getMessage();
			}
		}

	}