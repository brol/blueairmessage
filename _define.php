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
 
if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'Blue Air Message',
    'Deux largeurs et un menu',
    'David Yim, Pierre Van Glabeke',
    '2.8.2',
    [
        'requires' => [['core', '2.26']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
