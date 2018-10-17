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