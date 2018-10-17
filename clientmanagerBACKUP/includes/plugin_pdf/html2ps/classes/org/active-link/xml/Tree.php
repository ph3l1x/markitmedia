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

/*
	This file is part of ActiveLink PHP XML Package (www.active-link.com).
	Copyright (c) 2002-2004 by Zurab Davitiani

	You can contact the author of this software via E-mail at
	hattrick@mailcan.com

	ActiveLink PHP XML Package is free software; you can redistribute it and/or modify
	it under the terms of the GNU Lesser General Public License as published by
	the Free Software Foundation; either version 2.1 of the License, or
	(at your option) any later version.

	ActiveLink PHP XML Package is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU Lesser General Public License for more details.

	You should have received a copy of the GNU Lesser General Public License
	along with ActiveLink PHP XML Package; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
  *	Tree class provides a base for Tree-Branch-Leaf trio
  *	@class		Tree
  *	@package	org.active-link.xml
  *	@author		Zurab Davitiani
  *	@version	0.4.0
  *	@see		Branch, Leaf
  */

class Tree {

	// protected variables
	var $nodes;
	var $id = 0;

	/**
	  *	Constructor for the object
	  *	@method		Tree
	  *	@returns	none
	  */
	function Tree() {
		$this->nodes = array();
	}

	/**
	  *	Adds given node to the Tree
	  *	@method		addNode
	  *	@param		mixed id
	  *	@param		mixed node
	  *	@returns	true if successful, false otherwise
	  */
	function addNode($id, $node) {
		$success = true;
		if($id == -1)
			$this->nodes[] = $node;
		else
			if(isset($this->nodes[$id]))
				$success = false;
			else
				$this->nodes[$id] = $node;
		return $success;
	}

	/**
	  *	Removes all nodes
	  *	@method		removeAllNodes
	  *	@returns	none
	  */
	function removeAllNodes () {
		$this->nodes = array();
	}

	/**
	  *	Removes specified node from the Tree
	  *	@method		removeNode
	  *	@param		mixed id
	  *	@returns	true if successful, false otherwise
	  */
	function removeNode($id) {
		$success = false;
		if(isset($this->nodes[$id])) {
			unset($this->nodes[$id]);
			$success = true;
		}
		return $success;
	}

}

?>
