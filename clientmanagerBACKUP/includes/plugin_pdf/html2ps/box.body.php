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