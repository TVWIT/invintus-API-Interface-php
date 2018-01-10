<?php
    /**
     * API hooks for invintus API version 3.0
     * User: Invintus
     * View documentation at https://invintus.api-docs.io/v2.5/locations
     */

    namespace Invintus\PublicAPI;

    use Invintus\InvintusAPI;

    /**
     * Class Event
     * @package Invintus\PublicAPI
     */

    class Sources extends InvintusAPI
    {
        /**
         * @var
         */
        protected $encoderID;

        /**
         * @return mixed
         */
        public function getSourceInfo()
        {
            try {
                return $this->makeCall($this->pubBaseURI, "Console/getEncoderByID", json_encode($this->params));
            }
            catch (\Exception $e) {
                return $e->getMessage();
            }
            return $this->encoderID;
        }
        /**
         * @return mixed
         */
        public function getSources()
        {
            try {
                return $this->makeCall($this->pubBaseURI, "Console/getEncoders", json_encode($this->params));
            }
            catch (\Exception $e) {
                return $e->getMessage();
            }
            return $this->encoderID;
        }

        /**
         * @param mixed $encoderID
         * @return $this
         */
        public function setEncoderID($encoderID)
        {
            $this->encoderID = $encoderID;
            $this->params['encoderID'] = $encoderID;

            return $this;
        }




    }