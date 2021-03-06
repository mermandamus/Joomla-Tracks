<?php
/**
* @version    $Id: view.html.php 72 2008-04-29 13:14:29Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Tracks component
 *
 * @static
 * @package		Tracks
 * @since 0.1
 */
class TracksViewTeam extends JView
{
	function display($tpl = null)
	{
		global $mainframe;

		if($this->getLayout() == 'form') {
			$this->_displayForm($tpl);
			return;
		}

		//get the object
		$object =& $this->get('data');
		
		parent::display($tpl);
	}

	function _displayForm($tpl)
	{
		global $mainframe, $option;

		$db		=& JFactory::getDBO();
		$uri 	=& JFactory::getURI();
		$user 	=& JFactory::getUser();
		$model	=& $this->getModel();

    $document = & JFactory::getDocument();
    $document->addStyleSheet('components/com_tracks/assets/css/tracksbackend.css');
    
		$lists = array();
		//get the project
		$object	=& $this->get('data');
		$isNew		= ($object->id < 1);

		// fail if checked out not by 'me'
		if ($model->isCheckedOut( $user->get('id') )) {
			$msg = JText::sprintf( 'DESCBEINGEDITTED', JText::_( 'The Team' ), $object->name );
			$mainframe->redirect( 'index.php?option='. $option, $msg );
		}

		// Edit or Create?
		if (!$isNew)
		{
			$model->checkout( $user->get('id') );
		}
    $imageselect = ImageSelect::getSelector('picture', 'picture_preview', 'teams', $object->picture);
    $miniimageselect = ImageSelect::getSelector('picture_small', 'mini_picture_preview', 'teams', $object->picture_small);
    
    //editor
		$editor =& JFactory::getEditor();
		
    // countries
    $countries = array();
    $countries[] = JHTML::_('select.option', '', JTEXT::_('Select country'));
    $countries = array_merge($countries, TracksCountries::getCountryOptions());
    $lists['countries'] = JHTML::_('select.genericlist', $countries, 'country_code', '', 'value', 'text', $object->country_code);
		
    $this->assignRef( 'editor', $editor );  
		  
		$this->assignRef('lists',		$lists);
		$this->assignRef('object',		$object);
    $this->assignRef( 'imageselect', $imageselect);
    $this->assignRef( 'miniimageselect', $miniimageselect);

		parent::display($tpl);
	}
}
?>
