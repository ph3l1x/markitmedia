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

/**
 * @package HTML2PS
 * @subpackage Document
 * Represents the 'background-postitions' CSS property value
 * 
 * @link http://www.w3.org/TR/CSS21/colors.html#propdef-background-position CSS 2.1 'background-position' property description
 */
class BackgroundPosition {
  /**
   * @var string X-offset value
   * @access public
   */
  var $x;

  /**
   * @var string Y-offset value
   * @access public
   */
  var $y;

  /**
   * @var boolean Indicates whether $x value contains absolute (false) or percentage (true) value
   * @access public
   */
  var $x_percentage;

  /**
   * @var boolean Indicates whether $y value contains absolute (false) or percentage (true) value
   * @access public
   */
  var $y_percentage;

  /** 
   * Constructs new 'background-position' value object
   * 
   * @param float $x X-offset value
   * @param boolean $x_percentage A flag indicating that $x value should be treated as percentage
   * @param float $y Y-offset value
   * @param boolean $y_percentage A flag indicating that $y value should be treated as percentage
   */
  function BackgroundPosition($x, $x_percentage, $y, $y_percentage) {
    $this->x = $x;
    $this->x_percentage = $x_percentage;
    $this->y = $y;
    $this->y_percentage = $y_percentage;
  }

  /**
   * A "deep copy" routine; it is required for compatibility with PHP 5
   *
   * @return BackgroundPosition A copy of current object
   */
  function &copy() {
    $value =& new BackgroundPosition($this->x, $this->x_percentage,
                                     $this->y, $this->y_percentage);
    return $value;
  }

  /**
   * Test is current value is equal to default 'background-position' CSS property value
   */
  function is_default() {
    return 
      $this->x == 0 &&
      $this->x_percentage &&
      $this->y == 0 &&
      $this->y_percentage;
  }

  /**
   * Converts the absolute lengths to the device points
   *
   * @param float $font_size Font size to use during conversion of 'ex' and 'em' units
   */
  function units2pt($font_size) {
    if (!$this->x_percentage) {
      $this->x = units2pt($this->x, $font_size);
    };

    if (!$this->y_percentage) {
      $this->y = units2pt($this->y, $font_size);
    };
  }
}

?>