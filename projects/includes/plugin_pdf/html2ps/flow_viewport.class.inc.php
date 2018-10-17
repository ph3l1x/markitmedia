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
class FlowViewport {
  var $left;
  var $top;
  var $width;
  var $height;

  function FlowViewport() {
    $this->left = 0;
    $this->top = 0;
    $this->width = 0;
    $this->height = 0;
  }

  function &create(&$box) {
    $viewport = new FlowViewport;
    $viewport->left   = $box->get_left_padding();
    $viewport->top    = $box->get_top_padding();
    
    $padding = $box->get_css_property(CSS_PADDING);
    
    $viewport->width  = $box->get_width() + $padding->left->value + $padding->right->value;
    $viewport->height = $box->get_height() + $padding->top->value + $padding->bottom->value;

    return $viewport;
  }

  function get_left() { return $this->left; }
  function get_top() { return $this->top; }
  function get_height() { return $this->height; }
  function get_width() { return $this->width; }
}
?>