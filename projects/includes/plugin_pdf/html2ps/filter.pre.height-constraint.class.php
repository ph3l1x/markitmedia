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

/**
 * This is an internal HTML2PS filter; you never need to use it.
 */

class PreTreeFilterHeightConstraint extends PreTreeFilter {
  function process(&$tree, $data, &$pipeline) {
    if (!is_a($tree, 'GenericFormattedBox')) {
      return;
    };

    /**
     * In non-quirks mode, percentage height should be ignored for children of boxes having
     * non-constrained height
     */
    global $g_config;
    if ($g_config['mode'] != 'quirks') {
      if (!is_null($tree->parent)) {
        $parent_hc = $tree->parent->get_height_constraint();
        $hc        = $tree->get_height_constraint();

        if (is_null($parent_hc->constant) &&
            $hc->constant[1]) {
          $hc->constant = null;
          $tree->put_height_constraint($hc);
        };
      };
    };

    /**
     * Set box height to constrained value
     */
    $hc     = $tree->get_height_constraint();
    $height = $tree->get_height();

    $tree->height = $hc->apply($height, $tree);

    /**
     * Proceed to this box children
     */
    if (is_a($tree, 'GenericContainerBox')) {
      for ($i=0, $size = count($tree->content); $i<$size; $i++) {
        $this->process($tree->content[$i], $data, $pipeline);
      };
    };
  }
}
?>