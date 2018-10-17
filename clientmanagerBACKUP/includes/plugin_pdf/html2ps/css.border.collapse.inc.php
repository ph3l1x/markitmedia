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
// $Header: /cvsroot/html2ps/css.border.collapse.inc.php,v 1.7 2006/07/09 09:07:44 Konstantin Exp $

define('BORDER_COLLAPSE', 1);
define('BORDER_SEPARATE', 2);

class CSSBorderCollapse extends CSSPropertyStringSet {
  function CSSBorderCollapse() { 
    $this->CSSPropertyStringSet(true, 
                                true,
                                array('inherit'  => CSS_PROPERTY_INHERIT,
                                      'collapse' => BORDER_COLLAPSE,
                                      'separate' => BORDER_SEPARATE)); 
  }

  function default_value() { 
    return BORDER_SEPARATE; 
  }

  function get_property_code() {
    return CSS_BORDER_COLLAPSE;
  }

  function get_property_name() {
    return 'border-collapse';
  }
}

CSS::register_css_property(new CSSBorderCollapse);

?>