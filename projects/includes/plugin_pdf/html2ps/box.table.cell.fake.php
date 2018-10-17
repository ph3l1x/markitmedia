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

class FakeTableCellBox extends TableCellBox {
  var $colspan;
  var $rowspan;

  function create(&$pipeline) {
    $box =& new FakeTableCellBox;
    
    $css_state =& $pipeline->get_current_css_state();
    $css_state->pushDefaultState();

    $box->readCSS($css_state);

    $nullbox =& new NullBox;
    $nullbox->readCSS($css_state);
    $box->add_child($nullbox);

    $box->readCSS($css_state);

    $css_state->popState();

    return $box;
  }

  function FakeTableCellBox() {
    // Required to reset any constraints initiated by CSS properties
    $this->colspan = 1;
    $this->rowspan = 1;
    $this->GenericContainerBox();

    $this->setCSSProperty(CSS_DISPLAY, 'table-cell');
    $this->setCSSProperty(CSS_VERTICAL_ALIGN, VA_MIDDLE);
  }

  function show(&$viewport) {
    return true;
  }
  
  function is_fake() {
    return true;
  }

  function get_width_constraint() {
    return new WCNone();
  }

  function get_height_constraint() {
    return new HCConstraint(null, null, null);
  }

  function get_height() {
    return 0;
  }

  function get_top_margin() {
    return 0;
  }

  function get_full_height() {
    return 0;
  }

  function get_max_width() {
    return 0;
  }

  function get_min_width() {
    return 0;
  }
}

?>