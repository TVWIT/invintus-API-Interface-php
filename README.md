# invintus-API-Interface-php
INVINTUS API SDK for PHP - Use Invintus Web Service API's in your PHP project
### install using composer
```angular2html
{
    "require": {
	        "invintus/invintus-api":"v1.0"
    }
}
```
### usage example 
> public api

```$xslt
//instantiate Invintus class
$v3Call = new \Invintus\PublicAPI\Events();
//build call and target endpoint
$v3Data  = $v3Call
            ->setApiKey("yourKey")
            ->setClientID("yourClientID")
            ->setEventID("eventIDtobeQueried")
            ->getDetailed(); //returns full request reply as object 
//displays your call builders params sent to API
$callParams = $v3Call->showCallParamsJson();
```
To view a complete list of API methods, endpoints and their options, please visit [https://invintus.api-docs.io/v2.5](https://invintus.api-docs.io/v2.5)

>CRUD actions are only accessible with a certified partner key. contact support@invintus.com if you are a certified partner and need an access token. 