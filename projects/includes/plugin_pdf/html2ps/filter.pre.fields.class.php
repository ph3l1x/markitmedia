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
class PreTreeFilterHTML2PSFields extends PreTreeFilter {
  var $filename;
  var $filesize;
  var $_timestamp;

  function PreTreeFilterHTML2PSFields($filename=null, $filesize=null, $timestamp=null) {
    $this->filename  = $filename;
    $this->filesize  = $filesize;

    if (is_null($timestamp)) {
      $this->_timestamp = date("Y-m-d H:s");
    } else {
      $this->_timestamp = $timestamp;
    };
  }

  function process(&$tree, $data, &$pipeline) {
    if (is_a($tree, 'TextBox')) {
      // Ignore completely empty text boxes
      if (count($tree->words) == 0) { return; };

      switch ($tree->words[0]) {
      case '##PAGE##':
        $parent =& $tree->parent;
        $field  = BoxTextFieldPageNo::from_box($tree);

        $parent->insert_before($field, $tree);

        $parent->remove($tree);
        break;
      case '##PAGES##':
        $parent =& $tree->parent;
        $field  = BoxTextFieldPages::from_box($tree);
        $parent->insert_before($field, $tree);
        $parent->remove($tree);
        break;
      case '##FILENAME##':
        if (is_null($this->filename)) {
          $tree->words[0] = $data->get_uri();
        } else {
          $tree->words[0] = $this->filename;
        };
        break;
      case '##FILESIZE##':
        if (is_null($this->filesize)) {
          $tree->words[0] = strlen($data->get_content());
        } else {
          $tree->words[0] = $this->filesize;
        };
        break;
      case '##TIMESTAMP##':
        $tree->words[0] = $this->_timestamp;
        break;
      };
    } elseif (is_a($tree, 'GenericContainerBox')) {
      for ($i=0; $i<count($tree->content); $i++) {
        $this->process($tree->content[$i], $data, $pipeline);
      };
    };
  }
}
?>