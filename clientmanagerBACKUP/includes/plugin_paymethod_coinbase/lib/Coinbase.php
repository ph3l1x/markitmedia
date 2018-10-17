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

if(!function_exists('curl_init')) {
    throw new Exception('The Coinbase client library requires the CURL PHP extension.');
}

require_once(dirname(__FILE__) . '/Coinbase/Exception.php');
require_once(dirname(__FILE__) . '/Coinbase/ApiException.php');
require_once(dirname(__FILE__) . '/Coinbase/ConnectionException.php');
require_once(dirname(__FILE__) . '/Coinbase/Coinbase.php');
require_once(dirname(__FILE__) . '/Coinbase/Requestor.php');
require_once(dirname(__FILE__) . '/Coinbase/Rpc.php');
require_once(dirname(__FILE__) . '/Coinbase/OAuth.php');
require_once(dirname(__FILE__) . '/Coinbase/TokensExpiredException.php');
require_once(dirname(__FILE__) . '/Coinbase/Authentication.php');
require_once(dirname(__FILE__) . '/Coinbase/SimpleApiKeyAuthentication.php');
require_once(dirname(__FILE__) . '/Coinbase/OAuthAuthentication.php');
require_once(dirname(__FILE__) . '/Coinbase/ApiKeyAuthentication.php');
