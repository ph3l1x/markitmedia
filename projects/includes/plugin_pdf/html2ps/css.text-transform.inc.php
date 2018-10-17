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
// $Header: /cvsroot/html2ps/css.text-transform.inc.php,v 1.2 2006/07/09 09:07:46 Konstantin Exp $

define('CSS_TEXT_TRANSFORM_NONE'      ,0);
define('CSS_TEXT_TRANSFORM_CAPITALIZE',1);
define('CSS_TEXT_TRANSFORM_UPPERCASE' ,2);
define('CSS_TEXT_TRANSFORM_LOWERCASE' ,3);

class CSSTextTransform extends CSSPropertyStringSet {
  function CSSTextTransform() { 
    $this->CSSPropertyStringSet(false, 
                                true,
                                array('inherit'    => CSS_PROPERTY_INHERIT,
                                      'none'       => CSS_TEXT_TRANSFORM_NONE,
                                      'capitalize' => CSS_TEXT_TRANSFORM_CAPITALIZE,
                                      'uppercase'  => CSS_TEXT_TRANSFORM_UPPERCASE,
                                      'lowercase'  => CSS_TEXT_TRANSFORM_LOWERCASE)); 
  }

  function default_value() { 
    return CSS_TEXT_TRANSFORM_NONE; 
  }

  function get_property_code() {
    return CSS_TEXT_TRANSFORM;
  }

  function get_property_name() {
    return 'text-transform';
  }
}

CSS::register_css_property(new CSSTextTransform);

?>
