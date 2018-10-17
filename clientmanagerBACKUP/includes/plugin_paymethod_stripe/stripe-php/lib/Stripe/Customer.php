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

class Stripe_Customer extends Stripe_ApiResource
{
  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public static function retrieve($id, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedRetrieve($class, $id, $apiKey);
  }

  public static function all($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedAll($class, $params, $apiKey);
  }

  public static function create($params=null, $apiKey=null)
  {
    $class = get_class();
    return self::_scopedCreate($class, $params, $apiKey);
  }

  public function save()
  {
    $class = get_class();
    return self::_scopedSave($class);
  }

  public function delete($params=null)
  {
    $class = get_class();
    return self::_scopedDelete($class, $params);
  }

  public function addInvoiceItem($params=null)
  {
    if (!$params)
      $params = array();
    $params['customer'] = $this->id;
    $ii = Stripe_InvoiceItem::create($params, $this->_apiKey);
    return $ii;
  }

  public function invoices($params=null)
  {
    if (!$params)
      $params = array();
    $params['customer'] = $this->id;
    $invoices = Stripe_Invoice::all($params, $this->_apiKey);
    return $invoices;
  }

  public function invoiceItems($params=null)
  {
    if (!$params)
      $params = array();
    $params['customer'] = $this->id;
    $iis = Stripe_InvoiceItem::all($params, $this->_apiKey);
    return $iis;
  }

  public function charges($params=null)
  {
    if (!$params)
      $params = array();
    $params['customer'] = $this->id;
    $charges = Stripe_Charge::all($params, $this->_apiKey);
    return $charges;
  }

  public function updateSubscription($params=null)
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    $url = $this->instanceUrl() . '/subscription';
    list($response, $apiKey) = $requestor->request('post', $url, $params);
    $this->refreshFrom(array('subscription' => $response), $apiKey, true);
    return $this->subscription;
  }

  public function cancelSubscription($params=null)
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    $url = $this->instanceUrl() . '/subscription';
    list($response, $apiKey) = $requestor->request('delete', $url, $params);
    $this->refreshFrom(array('subscription' => $response), $apiKey, true);
    return $this->subscription;
  }

  public function deleteDiscount()
  {
    $requestor = new Stripe_ApiRequestor($this->_apiKey);
    $url = $this->instanceUrl() . '/discount';
    list($response, $apiKey) = $requestor->request('delete', $url);
    $this->refreshFrom(array('discount' => null), $apiKey, true);
  }
}
