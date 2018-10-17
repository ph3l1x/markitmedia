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

require_once(HTML2PS_DIR . 'box.generic.formatted.php');

class SimpleInlineBox extends GenericBox {
  function SimpleInlineBox() {
    $this->GenericBox();
  }

  function readCSS(&$state) {
    parent::readCSS($state);

    $this->_readCSS($state,
                    array(CSS_TEXT_DECORATION,
                          CSS_TEXT_TRANSFORM));
    
    // '-html2ps-link-target'
    global $g_config;
    if ($g_config["renderlinks"]) {
      $this->_readCSS($state, 
                      array(CSS_HTML2PS_LINK_TARGET));
    };
  }

  function get_extra_left() {
    return 0;
  }

  function get_extra_top() {
    return 0;
  }

  function get_extra_right() {
    return 0;
  }

  function get_extra_bottom() {
    return 0;
  }

  function show(&$driver) {
    parent::show($driver);

    $strategy =& new StrategyLinkRenderingNormal();
    $strategy->apply($this, $driver);
  }
}
?>