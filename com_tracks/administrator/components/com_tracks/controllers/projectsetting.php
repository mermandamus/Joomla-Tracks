<?php
/**
* @version    $Id: competition.php 94 2008-05-02 10:28:05Z julienv $ 
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

jimport('joomla.application.component.controller');

/**
 * Joomla Tracks Component Controller
 *
 * @package		Tracks
 * @since 0.1
 */
class TracksControllerProjectsetting extends BaseController
{
  
  function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add',  'display' );
		$this->registerTask( 'edit', 'display' );
		$this->registerTask( 'apply', 'save' );
	}
  
  
	function display() {
	
	  switch($this->getTask())
		{
			case 'add'     :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'projectsetting');
				JRequest::setVar( 'edit', false );

				// Checkout the project
				$model = $this->getModel('projectsetting');
				$model->checkout();
			} break;
			case 'edit'    :
			{
				JRequest::setVar( 'hidemainmenu', 1 );
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'projectsetting');
				JRequest::setVar( 'edit', true );

				// Checkout the project
				$model = $this->getModel('projectsetting');
				$model->checkout();
			} break;
		}
		parent::display();
	}
	
  function save()
	{
		$post	= JRequest::get('post');
		$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$post['id'] = (int) $cid[0];

		$model = $this->getModel('projectsetting');

		if ($returnid = $model->store($post)) {
			$msg = JText::_( 'Settings Saved' );
		} else {
			$msg = JText::_( 'Error Saving Settings' ).$model->getError();
		}

		// Check the table in so it can be edited.... we are done with it anyway
		$model->checkin();
		
		if ( !$returnid || $this->getTask() == 'save' ) {
			$link = 'index.php?option=com_tracks&view=projectsettings';
		}
		else {
			$link = 'index.php?option=com_tracks&controller=projectsetting&task=edit&cid[]='.$returnid;
		}
		$this->setRedirect($link, $msg);
	}

	function remove()
	{
		$cid = JRequest::getVar( 'cid', array(), 'post', 'array' );
		JArrayHelper::toInteger($cid);

		if (count( $cid ) < 1) {
			JError::raiseError(500, JText::_( 'Select an item to delete' ) );
		}

		$model = $this->getModel('projectsetting');
		
		if(!$model->delete($cid)) {
			echo "<script> alert('".$model->getError(true)."'); window.history.go(-1); </script>\n";
		}

		$this->setRedirect( 'index.php?option=com_tracks&view=projectsettings' );
	}

	function cancel()
	{
		// Checkin the project
		$model = $this->getModel('competition');
		$model->checkin();

		$this->setRedirect( 'index.php?option=com_tracks&view=projectsettings' );
	}

}
?>
