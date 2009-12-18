<?php
/**
* @version    $Id: competition.php 10 2008-02-03 13:19:59Z julienv $ 
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
* Competitions Table class
*
* @package		Tracks
* @since 0.1
*/
class TableProjectsetting extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	/**
	 * project id
	 *
	 * @var int
	 */
  var $project_id;
 
  /**
   * name of reference file
   *
   * @var string
   */
  var $xml;
  /**
   * values
   *
   * @var string
   */
  var $settings;
    
  var $checked_out;
  var $checked_out_time;   


	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__tracks_project_settings', 'id', $db);
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
		//should check name unicity
		return true;
	}
	

  /**
   * Overloaded bind function
   *
   * @acces public
   * @param array $hash named array
   * @return null|string  null is operation was satisfactory, otherwise returns an error
   * @see JTable:bind
   * @since 1.5
   */
  function bind($array, $ignore = '')
  {
    if (key_exists( 'settings', $array ) && is_array( $array['settings'] )) {
      $registry = new JRegistry();
      $registry->loadArray($array['settings']);
      $array['settings'] = $registry->toString();
    }
    //print_r($array);exit;
    return parent::bind($array, $ignore);
  }
}
?>
