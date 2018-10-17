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

class StrategyLinkRenderingNormal {
  function StrategyLinkRenderingNormal() {
  }

  function apply(&$box, &$driver) {
    $link_target = $box->get_css_property(CSS_HTML2PS_LINK_TARGET);

    if (CSSPseudoLinkTarget::is_external_link($link_target)) {
      $driver->add_link($box->get_left(), 
                        $box->get_top(), 
                        $box->get_width(), 
                        $box->get_height(), 
                        $link_target);
    } elseif (CSSPseudoLinkTarget::is_local_link($link_target)) {
      if (isset($driver->anchors[substr($link_target,1)])) {
        $anchor = $driver->anchors[substr($link_target,1)];
        $driver->add_local_link($box->get_left(), 
                                $box->get_top(), 
                                $box->get_width(), 
                                $box->get_height(), 
                                $anchor);
      };
    };
  }
}
