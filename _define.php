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
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"Blue Air Message",
	/* Description*/		"Deux largeurs et un menu",
	/* Author */			"David Yim, Pierre Van Glabeke",
	/* Version */			'2.6',
	array(
		'type'		=>		'theme',
		'tplset' => 'mustek',
		'dc_min' => '2.9'
	)
);