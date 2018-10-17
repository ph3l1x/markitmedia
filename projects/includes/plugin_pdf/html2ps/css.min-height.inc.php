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
// $Header: /cvsroot/html2ps/css.min-height.inc.php,v 1.3 2006/11/11 13:43:52 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.min-height.php');

class CSSMinHeight extends CSSPropertyHandler {
  var $_defaultValue;

  function CSSMinHeight() { 
    $this->CSSPropertyHandler(true, false); 
    $this->_defaultValue = ValueMinHeight::fromString("0px");
  }

  /**
   * 'height' CSS property should be inherited by table cells from table rows
   * (as, obviously, )
   */
  function inherit($old_state, &$new_state) { 
    $parent_display = $old_state[CSS_DISPLAY];
    if ($parent_display === "table-row") {
      $new_state[CSS_MIN_HEIGHT] = $old_state[CSS_MIN_HEIGHT];
      return;
    }

    $new_state[CSS_MIN_HEIGHT] = 
      is_inline_element($parent_display) ? 
      $this->get($old_state) : 
      $this->default_value();
  }

  function _getAutoValue() {
    return $this->default_value();
  }

  function default_value() { 
    return $this->_defaultValue->copy();
  }

  function parse($value) { 
    return ValueMinHeight::fromString($value);
  }

  function get_property_code() {
    return CSS_MIN_HEIGHT;
  }

  function get_property_name() {
    return 'min-height';
  }
}
 
CSS::register_css_property(new CSSMinHeight);

?>