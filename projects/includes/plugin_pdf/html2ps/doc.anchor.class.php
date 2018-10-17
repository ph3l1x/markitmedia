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
 * @package HTML2PS
 * @subpackage Document
 * Contains an Anchor class definition
 * 
 * @see Anchor
 */

/**
 * @package HTML2PS
 * @subpackage Document
 * Defines a position on the PDF page which could be referred by a hyperlink
 *
 * @see GenericFormattedBox::reflow_anchors
 */
class Anchor {
  /**
   * @var string Symbolic name of the location
   * @access public
   */
  var $name;

  /**
   * @var int Page number 
   * @access public
   */
  var $page;

  /**
   * @var float X-coordinate on the selected page
   * @access public
   */
  var $x;

  /**
   * @var float Y-coordinate on the selected page
   * @access public
   */
  var $y;

  /**
   * Constructs a new Anchor object
   *
   * @param string $name symbolic name of the anchor
   * @param int $page page containing this anhor
   * @param int $x X-coordinate of the anchor on the selected page
   * @param int $y Y-coordinate of the anchor on the selected page
   */
  function Anchor($name, $page, $x, $y) {
    $this->name = $name;
    $this->page = $page;
    $this->x    = $x;
    $this->y    = $y;
  }
}

?>