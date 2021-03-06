<?php
/**
* @version    $Id: form.php 128 2008-06-06 08:08:04Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

defined('_JEXEC') or die('Restricted access'); ?>

<?php JHTML::_('behavior.tooltip'); ?>

<?php
	// Set toolbar items for the page
	$edit		= JRequest::getVar('edit',true);
	$text = !$edit ? JText::_( 'New' ) : JText::_( 'Edit' );
	JToolBarHelper::title(   JText::_( 'Individual' ).': <small><small>[ ' . $text.' ]</small></small>' );
	JToolBarHelper::save();
	JToolBarHelper::apply();
	if (!$edit)  {
		JToolBarHelper::cancel();
	} else {
		// for existing items the button is renamed `close`
		JToolBarHelper::cancel( 'cancel', 'Close' );
	}
	JToolBarHelper::help( 'screen.tracks.edit' );
?>

<script language="javascript" type="text/javascript">
	function submitbutton(pressbutton) {
		var form = document.adminForm;
		if (pressbutton == 'cancel') {
			submitform( pressbutton );
			return;
		}

		// do field validation
		if (form.last_name.value == ""){
			alert( "<?php echo JText::_( 'Individual must have a last name', true ); ?>" );
		} else {
			submitform( pressbutton );
		}
	}
</script>
<style type="text/css">
	table.paramlist td.paramlist_key {
		width: 92px;
		text-align: left;
		height: 30px;
	}
</style>

<div id="tracksmain">
<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col50">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'Individual' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="full_name">
					<?php echo JText::_( 'First name' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="first_name" id="first_name" size="32" maxlength="40" value="<?php echo $this->object->first_name; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'Last name' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="last_name" id="last_name" size="32" maxlength="40" value="<?php echo $this->object->last_name; ?>" />
			</td>
		</tr>
	  <tr>
	    <td width="100" align="right" class="key"><label for="alias"> <?php echo JText::_( 'Alias' ); ?>:
	    </label></td>
	    <td><input class="text_area" type="text" name="alias" id="alias"
	      size="32" maxlength="250" value="<?php echo $this->object->alias?>" />
	    </td>
	  </tr>
    <tr>
      <td width="100" align="right" class="key">
        <label for="nickname">
          <?php echo JText::_( 'Nickname' ); ?>:
        </label>
      </td>
      <td>
        <input class="text_area" type="text" name="nickname" id="nickname" size="32" maxlength="40" value="<?php echo $this->object->nickname; ?>" />
      </td>
    </tr>
    
		<tr>
			<td width="100" align="right" class="key">
				<label for="user_id">
					<?php echo JText::_( 'User' ); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->lists['users']; ?>
      </td>
		</tr>
		
		<!-- start image import -->
    <tr>
      <td width="100" align="right" class="key">
        <label for="image">
          <span class="hasTip" title='<?php echo JText::_( 'INDIVIDUALPICTURE' ); ?>::<?php echo JText::_( 'INDIVIDUALPICTUREDESC' ); ?>'>
            <?php echo JText::_( 'INDIVIDUALPICTURE' ).':'; ?>
          </span>
        </label>
      </td>
      <td>
        <table>
          <tr>
            <td><?php echo $this->imageselect; ?></td>
            <td>
              <img class="imagepreview" src="../images/M_images/blank.png" name="picture_preview" id="picture_preview" width="80" height="80" border="2" alt="Preview" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- end image import -->
    <!-- start image import -->
    <tr>
      <td width="100" align="right" class="key">
        <label for="miniimage">
          <span class="hasTip" title='<?php echo JText::_( 'INDIVIDUALSMALLPICTURE' ); ?>::<?php echo JText::_( 'INDIVIDUALSMALLPICTUREDESC' ); ?>'>
            <?php echo JText::_( 'INDIVIDUALSMALLPICTURE' ).':'; ?>
          </span>
        </label>
      </td>
      <td>
        <table>
          <tr>
            <td><?php echo $this->miniimageselect; ?></td>
            <td>
              <img class="imagepreview" src="../images/M_images/blank.png" name="mini_picture_preview" id="mini_picture_preview" width="80" height="80" border="2" alt="Preview" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- end image import -->
    
    <tr>
      <td width="100" align="right" class="key">
        <label for="height">
          <?php echo JText::_( 'Height' ); ?>:
        </label>
      </td>
      <td>
        <input class="text_area" type="text" name="height" id="height" size="10" maxlength="10" value="<?php echo $this->object->height; ?>" />
      </td>
    </tr>
    <tr>
      <td width="100" align="right" class="key">
        <label for="weight">
          <?php echo JText::_( 'Weight' ); ?>:
        </label>
      </td>
      <td>
        <input class="text_area" type="text" name="weight" id="weight" size="10" maxlength="10" value="<?php echo $this->object->weight; ?>" />
      </td>
    </tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'COUNTRY' ); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->lists['countries']; ?>
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'Date of birth YYYY-MM-DD' ); ?>:
				</label>
			</td>
			<td>
			<?php 
      echo  JHTML::calendar( $this->object->dob, 'dob', 'dob' );
      ?>
      </td>
		</tr>
    <tr>
      <td width="100" align="right" class="key">
        <label for="hometown">
          <?php echo JText::_( 'Hometown' ); ?>:
        </label>
      </td>
      <td>
        <input class="text_area" type="text" name="hometown" id="hometown" size="30" maxlength="50" value="<?php echo $this->object->hometown; ?>" />
      </td>
    </tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'Address' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="address" id="address" size="100" maxlength="200" value="<?php echo $this->object->address; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'Postcode' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="postcode" id="postcode" size="10" maxlength="10" value="<?php echo $this->object->postcode; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'City' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="city" id="city" size="30" maxlength="50" value="<?php echo $this->object->city; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'State' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="state" id="state" size="30" maxlength="50" value="<?php echo $this->object->state; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="last_name">
					<?php echo JText::_( 'Country' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="country" id="country" size="30" maxlength="50" value="<?php echo $this->object->country; ?>" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="name">
					<?php echo JText::_( 'Description' ); ?>:
				</label>
			</td>
			<td>
				<?php echo $this->editor->display('description', $this->object->description, '100%', '400', '70', '15'); ?>
      </td>
		</tr>
	</table>
	</fieldset>
</div>

<div class="clr"></div>

<input type="hidden" name="option" value="com_tracks" />
<input type="hidden" name="controller" value="individual" />
<input type="hidden" name="cid[]" value="<?php echo $this->object->id; ?>" />
<input type="hidden" name="task" value="" />
</form>
</div>