<?php
/**
 * @brief blueairmessage, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Theme
 *
 * @author David Yim, Pierre Van Glabeke
 *
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__) . '/locales/' . dcCore::app()->lang. '/public');

# appel css largeurs (780.css ou 990.css)
dcCore::app()->addBehavior('publicHeadContent','blueairmessagewidth_publicHeadContent');

function blueairmessagewidth_publicHeadContent()
{
	$style = dcCore::app()->blog->settings->themes->blueairmessage_width;
	if (!preg_match('/^780|990$/', (string) $style)) {
		$style = '780';
	}

	$url = dcCore::app()->blog->settings->system->themes_url.'/'.dcCore::app()->blog->settings->system->theme;
	echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/css/".$style.".css\" />\n";
}
