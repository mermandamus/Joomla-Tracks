<?php
/**
* @version    $Id: season.php 10 2008-02-03 13:19:59Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.filter.input');

/**
* Season Table class
*
* @package		Tracks
* @since 0.1
*/
class TableSeason extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	
  var $name;  
  /**
   * alias for SEO
   *
   * @var string
   */
  var $alias;
     
  var $ordering;
  
  var $checked_out;
  var $checked_out_time;
  var $published;

	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__tracks_seasons', 'id', $db);
	}

	/**
	 * Overloaded check method to ensure data integrity
	 *
	 * @access public
	 * @return boolean True on success
	 * @since 1.0
	 */
	function check()
	{
    $alias = JFilterOutput::stringURLSafe($this->name);

    if(empty($this->alias) || $this->alias === $alias ) {
      $this->alias = $alias;
    }
		//should check name unicity
		return true;
	}
}
?>
