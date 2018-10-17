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

abstract class Stripe_Util
{
  public static function isList($array)
  {
    if (!is_array($array))
      return false;
    // TODO: this isn't actually correct in general, but it's correct given Stripe's responses
    foreach (array_keys($array) as $k) {
      if (!is_numeric($k))
        return false;
    }
    return true;
  }

  public static function convertStripeObjectToArray($values)
  {
    $results = array();
    foreach ($values as $k => $v) {
      // FIXME: this is an encapsulation violation
      if (Stripe_Object::$_permanentAttributes->includes($k)) {
        continue;
      }
      if ($v instanceof Stripe_Object) {
        $results[$k] = $v->__toArray(true);
      }
      else if (is_array($v)) {
        $results[$k] = self::convertStripeObjectToArray($v);
      }
      else {
        $results[$k] = $v;
      }
    }
    return $results;
  }

  public static function convertToStripeObject($resp, $apiKey)
  {
    $types = array('charge' => 'Stripe_Charge',
		   'customer' => 'Stripe_Customer',
                   'list' => 'Stripe_List',
		   'invoice' => 'Stripe_Invoice',
		   'invoiceitem' => 'Stripe_InvoiceItem',
                   'event' => 'Stripe_Event',
		   'transfer' => 'Stripe_Transfer',
                   'plan' => 'Stripe_Plan');
    if (self::isList($resp)) {
      $mapped = array();
      foreach ($resp as $i)
        array_push($mapped, self::convertToStripeObject($i, $apiKey));
      return $mapped;
    } else if (is_array($resp)) {
      if (isset($resp['object']) && is_string($resp['object']) && isset($types[$resp['object']]))
        $class = $types[$resp['object']];
      else
        $class = 'Stripe_Object';
      return Stripe_Object::scopedConstructFrom($class, $resp, $apiKey);
    } else {
      return $resp;
    }
  }
}
