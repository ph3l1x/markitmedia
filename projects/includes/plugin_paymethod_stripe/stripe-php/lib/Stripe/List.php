<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
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
