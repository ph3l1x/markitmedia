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

class Coinbase_OAuthAuthentication extends Coinbase_Authentication
{
    private $_oauth;
    private $_tokens;

    public function __construct($oauth, $tokens)
    {
        $this->_oauth = $oauth;
        $this->_tokens = $tokens;
    }

    public function getData()
    {
        $data = new stdClass();
        $data->oauth = $this->_oauth;
        $data->tokens = $this->_tokens;
        return $data;
    }
}