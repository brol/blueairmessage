<?php
/* BEGIN LICENSE BLOCK
This file is part of BlueAirMessage, a theme for Dotclear.

Copyright (c) 2011-2016
David Yim mail@davidyim.com
Pierre Van Glabeke

Licensed under the GPL version 2.0 license.
A copy of this license is available in LICENSE file or at
http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
END LICENSE BLOCK */

if (!defined('DC_CONTEXT_ADMIN')) { return; }

dcCore::app();

//PARAMS

# Translations
l10n::set(__DIR__ . '/locales/' . dcCore::app()->lang . '/main');

# Default values
$default_width = '780';

# Settings
$my_width = dcCore::app()->blog->settings->themes->blueairmessage_width;

# Width type
$blueairmessage_width_combo = array(
	__('780') => '780',
	__('990') => '990'
);

// POST ACTIONS

if (!empty($_POST))
{
	try
	{
		dcCore::app()->blog->settings->addNamespace('themes');

		# Width type
		if (!empty($_POST['blueairmessage_width']) && in_array($_POST['blueairmessage_width'],$blueairmessage_width_combo))
		{
			$my_width = $_POST['blueairmessage_width'];

		} elseif (empty($_POST['blueairmessage_width']))
		{
			$my_width = $default_width;

		}
		dcCore::app()->blog->settings->themes->put('blueairmessage_width',$my_width,'string','Width to display',true);

		// Blog refresh
		dcCore::app()->blog->triggerBlog();

		// Template cache reset
		dcCore::app()->emptyTemplatesCache();

		dcPage::success(__('Theme configuration has been successfully updated.'),true,true);
	}
	catch (Exception $e)
	{
		dcCore::app()->error->add($e->getMessage());
	}
}

// DISPLAY

# Width
echo
'<div class="fieldset"><h4>'.__('Customization').'</h4>'.
'<p class="field"><label>'.__('Display width:').'</label>'.
form::combo('blueairmessage_width',$blueairmessage_width_combo,$my_width).
'</p>'.
'</div>';
