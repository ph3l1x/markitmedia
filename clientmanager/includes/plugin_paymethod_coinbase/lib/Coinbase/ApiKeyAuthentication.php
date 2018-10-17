<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:14:37 
  * IP Address: 68.105.129.178
  */

class Coinbase_ApiKeyAuthentication extends Coinbase_Authentication
{
    private $_apiKey;
    private $_apiKeySecret;

    public function __construct($apiKey, $apiKeySecret)
    {
        $this->_apiKey = $apiKey;
        $this->_apiKeySecret = $apiKeySecret;
    }

    public function getData()
    {
        $data = new stdClass();
        $data->apiKey = $this->_apiKey;
        $data->apiKeySecret = $this->_apiKeySecret;
        return $data;
    }
}