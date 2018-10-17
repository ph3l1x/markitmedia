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
// $Header: /cvsroot/html2ps/box.null.php,v 1.18 2006/07/09 09:07:44 Konstantin Exp $

class NullBox extends GenericInlineBox {
  function get_min_width(&$context) { return 0; }
  function get_max_width(&$context) { return 0; }
  function get_height() { return 0; }

  function NullBox() {
    $this->GenericInlineBox();
  }
  
  function &create() { 
    $box =& new NullBox;

    $css_state = new CSSState(CSS::get());
    $css_state->pushState();
    $box->readCSS($css_state);

    return $box; 
  }

  function show(&$viewport) {
    return true;
  }

  function reflow_static(&$parent, &$context) {
    if (!$parent) {
      $this->put_left(0);
      $this->put_top(0);
      return;
    };

    // Move current "box" to parent current coordinates. It is REQUIRED, 
    // as some other routines uses box coordinates.
    $this->put_left($parent->get_left());
    $this->put_top($parent->get_top());
  }

  function is_null() { return true; }
}
?>