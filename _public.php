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

l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/public');

# appel css largeurs (780.css ou 990.css)
$core->addBehavior('publicHeadContent','blueairmessagewidth_publicHeadContent');

function blueairmessagewidth_publicHeadContent($core)
{
	$style = $core->blog->settings->themes->blueairmessage_width;
	if (!preg_match('/^780|990$/',$style)) {
		$style = '780';
	}

	$url = $core->blog->settings->system->themes_url.'/'.$core->blog->settings->system->theme;
	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/css/".$style.".css\" />\n";
}