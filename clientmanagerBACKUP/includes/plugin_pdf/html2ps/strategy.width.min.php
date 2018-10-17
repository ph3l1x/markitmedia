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

class StrategyWidthMin {
  var $_maxw;
  var $_cmaxw;

  function StrategyWidthMin() {
  }

  function add_width($delta) {
    $this->_cmaxw += $delta;
  }

  function line_break() {
    $this->_maxw  = max($this->_maxw, $this->_cmaxw);
    $this->_cmaxw = 0;
  }

  function apply(&$box, &$context) {
    $content_size = count($box->content);

    /**
     * If box does not have any context, its minimal width is determined by extra horizontal space:
     * padding, border width and margins
     */
    if ($content_size == 0) { 
      $min_width = $box->_get_hor_extra();
      return $min_width;
    };

    /**
     * If we're in 'nowrap' mode, minimal and maximal width will be equal
     */
    $white_space = $box->get_css_property(CSS_WHITE_SPACE);
    $pseudo_nowrap = $box->get_css_property(CSS_HTML2PS_NOWRAP);
    if ($white_space   == WHITESPACE_NOWRAP || 
        $pseudo_nowrap == NOWRAP_NOWRAP) { 
      $min_width = $box->get_min_nowrap_width($context);
      return $min_width; 
    }

    /**
     * We need to add text indent size to the with of the first item
     */
    $start_index = 0;
    while ($start_index < $content_size && 
           $box->content[$start_index]->out_of_flow()) { 
      $start_index++; 
    };

    if ($start_index < $content_size) {
      $ti = $box->get_css_property(CSS_TEXT_INDENT);
      $minw = 
        $ti->calculate($box) + 
        $box->content[$start_index]->get_min_width($context);
    } else {
      $minw = 0;
    };

    for ($i=$start_index; $i<$content_size; $i++) {
      $item =& $box->content[$i];
      if (!$item->out_of_flow()) {
        $minw = max($minw, $item->get_min_width($context));
      };
    };

    /**
     * Apply width constraint to min width. Return maximal value
     */
    $wc = $box->get_css_property(CSS_WIDTH);
    $containing_block = $box->_get_containing_block();

    $min_width = max($minw, 
                     $wc->apply($minw, $containing_block['right'] - $containing_block['left'])) + $box->_get_hor_extra();
    return $min_width;
  }
}

?>