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