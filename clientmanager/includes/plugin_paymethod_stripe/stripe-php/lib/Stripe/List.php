<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2014-04-21 08:00:26 
  * IP Address: 70.166.101.44
  */

class Stripe_List extends Stripe_Object
{
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public function all($params=null)
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    list($response, $apiKey) = $requestor->request('get', $this['url'], $params);
    return Stripe_Util::convertToStripeObject($response, $apiKey);
  }

  public function create($params=null)
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    list($response, $apiKey) = $requestor->request('post', $this['url'], $params);
    return Stripe_Util::convertToStripeObject($response, $apiKey);
  }

  public function retrieve($id, $params=null)
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    $base = $this['url'];
    $id = Stripe_ApiRequestor::utf8($id);
    $extn = urlencode($id);
    list($response, $apiKey) = $requestor->request('get', "$base/$extn", $params);
    return Stripe_Util::convertToStripeObject($response, $apiKey);
  }

}
