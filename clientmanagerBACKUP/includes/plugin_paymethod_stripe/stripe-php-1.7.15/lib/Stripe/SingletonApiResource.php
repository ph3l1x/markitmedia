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

abstract class Stripe_SingletonApiResource extends Stripe_ApiResource
{
  protected static function _scopedSingletonRetrieve($class, $apiKey=null)
  {
    $instance = new $class(null, $apiKey);
    $instance->refresh();
    return $instance;
  }

  public static function classUrl($class)
  {
    $base = self::className($class);
    return "/v1/${base}";
  }

  public function instanceUrl()
  {
    $class = get_class($this);
    $base = self::classUrl($class);
    return "$base";
  }
}
