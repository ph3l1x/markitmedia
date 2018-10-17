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
// $Header: /cvsroot/html2ps/css.text-align.inc.php,v 1.10 2006/09/07 18:38:14 Konstantin Exp $

define('TA_LEFT',0);
define('TA_RIGHT',1);
define('TA_CENTER',2);
define('TA_JUSTIFY',3);

class CSSTextAlign extends CSSPropertyStringSet {
  function CSSTextAlign() { 
    $this->CSSPropertyStringSet(true, 
                                true,
                                array('inherit' => CSS_PROPERTY_INHERIT,
                                      'left'    => TA_LEFT,
                                      'right'   => TA_RIGHT,
                                      'center'  => TA_CENTER,
                                      'middle'  => TA_CENTER,
                                      'justify' => TA_JUSTIFY)); 
  }
  
  function default_value() { return TA_LEFT; }

  function value2pdf($value) { 
    switch ($value) {
    case TA_LEFT:
      return "ta_left";
    case TA_RIGHT:
      return "ta_right";
    case TA_CENTER:
      return "ta_center";
    case TA_JUSTIFY:
      return "ta_justify";
    default:
      return "ta_left";
    }
  }

  function get_property_code() {
    return CSS_TEXT_ALIGN;
  }

  function get_property_name() {
    return 'text-align';
  }
}

CSS::register_css_property(new CSSTextAlign);

?>