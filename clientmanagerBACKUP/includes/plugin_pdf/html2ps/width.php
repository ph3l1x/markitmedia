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

require_once(HTML2PS_DIR . 'width.constraint.php');

function merge_width_constraint($wc1, $wc2) {
  if ($wc1->isNull()) { 
    return $wc2; 
  };

  if ($wc1->isConstant() && !$wc2->isNull()) {
    return $wc2;
  };

  if ($wc1->isFraction() && $wc2->isFraction()) {
    return $wc2;
  };

  return $wc1;
}

// the second parameter of 'apply' method may be null; it means that 
// parent have 'fit' width and depends on the current constraint itself

class WCNone extends WidthConstraint {
  function WCNone() {
    $this->WidthConstraint();
  }

  function applicable(&$box) { return false; }

  function _apply($w, $pw) { return $w; }
  function apply_inverse($w, $pw) { return $pw; }

  function &_copy() { 
    $copy =& new WCNone();
    return $copy;
  }

  function _units2pt($base) { 
  }

  function isNull() { return true; }
}

class WCConstant extends WidthConstraint {
  var $width;

  function WCConstant($width) {
    $this->WidthConstraint();
    $this->width = $width;
  }

  function applicable(&$box) { 
    return true; 
  }

  function _apply($w, $pw) {
    return $this->width;
  }

  function apply_inverse($w, $pw) { 
    return $pw; 
  }

  function &_copy() { 
    $copy =& new WCConstant($this->width); 
    return $copy;
  }

  function _units2pt($base) { 
    $this->width = units2pt($this->width, $base); 
  }

  function isConstant() { 
    return true; 
  }
}

class WCFraction extends WidthConstraint {
  var $fraction;

  function applicable(&$box) {
    if (is_null($box->parent)) { return false; };
    $parent_wc = $box->parent->get_css_property(CSS_WIDTH);
    return $box->isCell() || $parent_wc->applicable($box->parent);
  }

  function WCFraction($fraction) { 
    $this->WidthConstraint();
    $this->fraction = $fraction;
  } 

  function _apply($w, $pw) {
    if (!is_null($pw)) {
      return $pw * $this->fraction;
    } else {
      return $w;
    };
  }

  function apply_inverse($w, $pw) { 
    if ($this->fraction > 0) { return $w / $this->fraction; } else { return 0; }; 
  }

  function &_copy() { 
    $copy =& new WCFraction($this->fraction); 
    return $copy;
  }

  function _units2pt($base) { 
  }

  function isFraction() { 
    return true; 
  }
}

?>