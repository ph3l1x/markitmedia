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

class FeatureAutomargins {
  var $_top_margin;
  var $_bottom_margin;

  function FeatureAutomargins() {
    $this->_top_margin = 0;
    $this->_bottom_margin = 0;
  }

  function handle_before_page_heights($params) {
    $pipeline =& $params['pipeline'];
    $document =& $params['document'];
    $media =& $params['media'];

    $boxes = $pipeline->reflow_margin_boxes(0, $media);

    $this->_top_margin = max($boxes[CSS_MARGIN_BOX_SELECTOR_TOP]->get_real_full_height(),
                             $boxes[CSS_MARGIN_BOX_SELECTOR_TOP_LEFT_CORNER]->get_real_full_height(),
                             $boxes[CSS_MARGIN_BOX_SELECTOR_TOP_LEFT]->get_real_full_height(),
                             $boxes[CSS_MARGIN_BOX_SELECTOR_TOP_CENTER]->get_real_full_height(),
                             $boxes[CSS_MARGIN_BOX_SELECTOR_TOP_RIGHT]->get_real_full_height(),
                             $boxes[CSS_MARGIN_BOX_SELECTOR_TOP_RIGHT_CORNER]->get_real_full_height());
    $this->_bottom_margin = max($boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM]->get_real_full_height(),
                                $boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM_LEFT_CORNER]->get_real_full_height(),
                                $boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM_LEFT]->get_real_full_height(),
                                $boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM_CENTER]->get_real_full_height(),
                                $boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM_RIGHT]->get_real_full_height(),
                                $boxes[CSS_MARGIN_BOX_SELECTOR_BOTTOM_RIGHT_CORNER]->get_real_full_height());
    
    $media->margins['top'] = $this->_top_margin / mm2pt(1);
    $media->margins['bottom'] = $this->_bottom_margin / mm2pt(1);
    
    $pipeline->output_driver->update_media($media);
    $pipeline->_setupScales($media);
  }

  function install(&$pipeline, $params) {
    $dispatcher =& $pipeline->get_dispatcher();
    $dispatcher->add_observer('before-page-heights', array(&$this, 'handle_before_page_heights'));
  }
}

?>