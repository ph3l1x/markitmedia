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

class Rectangle {
  var $ur;
  var $ll;
  
  function Rectangle($ll, $ur) {
    $this->ll = $ll;
    $this->ur = $ur;
  }

  function getWidth() {
    return $this->ur->x - $this->ll->x;
  }

  function getHeight() {
    return $this->ur->y - $this->ll->y;
  }

  function normalize() {
    if ($this->ur->x < $this->ll->x) {
      $x = $this->ur->x;
      $this->ur->x = $this->ll->x;
      $this->ll->x = $x;
    };

    if ($this->ur->y < $this->ll->y) {
      $y = $this->ur->y;
      $this->ur->y = $this->ll->y;
      $this->ll->y = $y;
    };
  }
}

?>