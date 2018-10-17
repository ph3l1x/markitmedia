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

class ButtonResetBox extends ButtonBox {
  function ButtonResetBox($text) {
    $this->ButtonBox($text);
  }

  function &create(&$root, &$pipeline) {
    if ($root->has_attribute("value")) {
      $text = $root->get_attribute("value");
    } else {
      $text = DEFAULT_RESET_TEXT;
    };

    $box =& new ButtonResetBox($text);
    $box->readCSS($pipeline->get_current_css_state());

    return $box;
  }

  function readCSS(&$state) {
    parent::readCSS($state);
    
    $this->_readCSS($state, 
                    array(CSS_HTML2PS_FORM_ACTION));
  }

  function _render_field(&$driver) {
    $driver->field_pushbuttonreset($this->get_left_padding(), 
                                   $this->get_top_padding(), 
                                   $this->get_width() + $this->get_padding_left() + $this->get_padding_right(), 
                                   $this->get_height() + $this->get_padding_top() + $this->get_padding_bottom());
  }
}

?>