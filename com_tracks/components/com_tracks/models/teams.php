<?php
/**
* @version    $Id: roundresult.php 61 2008-04-24 15:20:36Z julienv $ 
* @package    JoomlaTracks
* @copyright    Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');
require_once( 'base.php' );
/**
 * Joomla Tracks Component Front page Model
 *
 * @package     Tracks
 * @since 0.1
 */
class TracksFrontModelTeams extends baseModel
{   
    function getData()
    {
        $query =  ' SELECT t.id, t.name, t.country_code, t.picture_small AS team_logo, '
                . ' CASE WHEN CHAR_LENGTH( t.alias ) THEN CONCAT_WS( \':\', t.id, t.alias ) ELSE t.id END AS slug '
        . ' FROM #__tracks_teams as t '
        . ' ORDER BY t.name ASC ';

        $this->_db->setQuery( $query );
        
        return $this->_db->loadObjectList();
    }
}
