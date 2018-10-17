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