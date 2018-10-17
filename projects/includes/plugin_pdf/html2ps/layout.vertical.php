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

class LayoutVertical {
  // Calculate the vertical offset of current box due the 'clear' CSS property
  // 
  // @param $y initial Y coordinate to begin offset from
  // @param $context flow context containing the list of floats to interact with
  // @return updated value of Y coordinate
  //
  function apply_clear($box, $y, &$context) {
    $clear = $box->get_css_property(CSS_CLEAR);

    // Check if we need to offset box vertically due the 'clear' property
    if ($clear == CLEAR_BOTH || $clear == CLEAR_LEFT) {
      $floats =& $context->current_floats();
      for ($cf = 0; $cf < count($floats); $cf++) {
        $current_float =& $floats[$cf];
        if ($current_float->get_css_property(CSS_FLOAT) == FLOAT_LEFT) {
          // Float vertical margins are never collapsed
          //
          $margin = $box->get_css_property(CSS_MARGIN);
          $y = min($y, $current_float->get_bottom_margin() - $margin->top->value);
        };
      }
    };
    
    if ($clear == CLEAR_BOTH || $clear == CLEAR_RIGHT) {
      $floats =& $context->current_floats();
      for ($cf = 0; $cf < count($floats); $cf++) {
        $current_float =& $floats[$cf];
        if ($current_float->get_css_property(CSS_FLOAT) == FLOAT_RIGHT) {
          // Float vertical margins are never collapsed
          $margin = $box->get_css_property(CSS_MARGIN);
          $y = min($y, $current_float->get_bottom_margin() - $margin->top->value);
        };
      }
    };
    
    return $y;
  }
}

?>