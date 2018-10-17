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
// $Header: /cvsroot/html2ps/css.visibility.inc.php,v 1.6 2007/04/07 11:16:34 Konstantin Exp $

define('VISIBILITY_VISIBLE',0);
define('VISIBILITY_HIDDEN',1);
define('VISIBILITY_COLLAPSE',2); // TODO: currently treated is hidden

class CSSVisibility extends CSSPropertyStringSet {
  function CSSVisibility() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('inherit'  => CSS_PROPERTY_INHERIT,
                                      'visible'  => VISIBILITY_VISIBLE,
                                      'hidden'   => VISIBILITY_HIDDEN,
                                      'collapse' => VISIBILITY_COLLAPSE)); 
  }

  function default_value() { 
    return VISIBILITY_VISIBLE; 
  }

  function get_property_code() {
    return CSS_VISIBILITY;
  }

  function get_property_name() {
    return 'visibility';
  }
}

CSS::register_css_property(new CSSVisibility);

?>