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
