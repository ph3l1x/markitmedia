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

class Stripe_Util_Set
{
  private $_elts;

  public function __construct($members=array())
  {
    $this->_elts = array();
    foreach ($members as $item)
      $this->_elts[$item] = true;
  }

  public function includes($elt)
  {
    return isset($this->_elts[$elt]);
  }

  public function add($elt)
  {
    $this->_elts[$elt] = true;
  }

  public function discard($elt)
  {
    unset($this->_elts[$elt]);
  }

  // TODO: make Set support foreach
  public function toArray()
  {
    return array_keys($this->_elts);
  }
}
