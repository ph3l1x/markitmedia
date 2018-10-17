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
// $Header: /cvsroot/html2ps/box.legend.php,v 1.14 2006/07/09 09:07:44 Konstantin Exp $

class LegendBox extends GenericContainerBox {
  function &create(&$root, &$pipeline) {
    $box = new LegendBox($root);
    $box->readCSS($pipeline->get_current_css_state());
    $box->create_content($root, $pipeline);

    return $box;
  }

  function LegendBox(&$root) {
    // Call parent constructor
    $this->GenericContainerBox();

    $this->_current_x = 0;
    $this->_current_y = 0;
  }

  // Flow-control
  function reflow(&$parent, &$context) {
    GenericFormattedBox::reflow($parent, $context);

    // Determine upper-left _content_ corner position of current box 
    $this->put_left($parent->get_left_padding());
    $this->put_top($parent->get_top_padding());

    // Legends will not wrap
    $this->put_full_width($this->get_max_width($context));

    // Reflow contents
    $this->reflow_content($context);

    // Adjust legend position
    $height = $this->get_full_height();
    $this->offset(units2pt(LEGEND_HORIZONTAL_OFFSET) + $this->get_extra_left(),
                  $height/2);
    // Adjust parent position
    $parent->offset(0, -$height/2);
    // Adjust parent content position
    for ($i=0; $i<count($parent->content); $i++) {
      if ($parent->content[$i]->uid != $this->uid) {
        $parent->content[$i]->offset(0, -$height/2);
      }
    }
    $parent->_current_y -= $height/2;
    
    $parent->extend_height($this->get_bottom_margin());
  }

  function show(&$driver) {
    // draw generic box
    return GenericContainerBox::show($driver);
  }
}
?>