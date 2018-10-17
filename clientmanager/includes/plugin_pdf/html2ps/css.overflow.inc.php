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
// $Header: /cvsroot/html2ps/css.overflow.inc.php,v 1.8 2006/09/07 18:38:14 Konstantin Exp $

define('OVERFLOW_VISIBLE',0);
define('OVERFLOW_HIDDEN',1);

class CSSOverflow extends CSSPropertyStringSet {
  function CSSOverflow() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('inherit' => CSS_PROPERTY_INHERIT,
                                      'hidden'  => OVERFLOW_HIDDEN,
                                      'scroll'  => OVERFLOW_HIDDEN,
                                      'auto'    => OVERFLOW_HIDDEN,
                                      'visible' => OVERFLOW_VISIBLE)); 
  }

  function default_value() { 
    return OVERFLOW_VISIBLE; 
  }

  function get_property_code() {
    return CSS_OVERFLOW;
  }

  function get_property_name() {
    return 'overflow';
  }
}

CSS::register_css_property(new CSSOverflow);

?>
