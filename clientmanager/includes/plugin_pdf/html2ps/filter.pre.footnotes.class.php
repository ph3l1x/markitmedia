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

require_once(HTML2PS_DIR . 'box.note-call.class.php');

/**
 * Support for CSS 3 position: footnote.
 *
 * Scans for elements having position: footnote and replaces them with
 * BoxNoteCall object (which contains reference to original data and
 * handles footnote rendering)
 */
class PreTreeFilterFootnotes extends PreTreeFilter {
  function process(&$tree, $data, &$pipeline) {
    if (is_a($tree, 'GenericContainerBox')) {
      for ($i=0; $i<count($tree->content); $i++) {
        /**
         * No need to check this conition for text boxes, as they do not correspond to 
         * HTML elements 
         */
        if (!is_a($tree->content[$i], 'TextBox')) {
          if ($tree->content[$i]->get_css_property(CSS_POSITION) == POSITION_FOOTNOTE) {
            $tree->content[$i]->setCSSProperty(CSS_POSITION, POSITION_STATIC);
            
            $note_call =& BoxNoteCall::create($tree->content[$i], $pipeline);
            $tree->content[$i] =& $note_call;
            
            $pipeline->_addFootnote($note_call);
          } else {
            $this->process($tree->content[$i], $data, $pipeline);
          };
        };
      };
    };

    return true;
  }
}
?>