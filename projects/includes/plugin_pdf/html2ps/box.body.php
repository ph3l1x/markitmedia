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

class BodyBox extends BlockBox {
  function BodyBox() {
    $this->BlockBox();
  }

  function &create(&$root, &$pipeline) {
    $box = new BodyBox();
    $box->readCSS($pipeline->get_current_css_state());
    $box->create_content($root, $pipeline);
    return $box;
  }

  function get_bottom_background() { 
    return $this->get_bottom_margin(); 
  }

  function get_left_background()   { 
    return $this->get_left_margin();   
  }

  function get_right_background()  { 
    return $this->get_right_margin();  
  }

  function get_top_background()    { 
    return $this->get_top_margin();    
  }

  function reflow(&$parent, &$context) {
    parent::reflow($parent, $context);
    
    // Extend the body height to fit all contained floats
    $float_bottom = $context->float_bottom();
    if (!is_null($float_bottom)) {
      $this->extend_height($float_bottom);
    };
  }
}

?>