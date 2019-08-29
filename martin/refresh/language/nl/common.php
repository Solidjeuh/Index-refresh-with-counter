<?php
/**
*
* @package phpBB Extension - Refresh
* @version $Id: refresh.php, 2019/08/28 Martin Exp $
* @copyright (c) 2019 martin - httpS://www.martins-phpbb.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'INDEX_REFRESH'          => 'Index vernieuwen',
    'INDEX_MCHAT_REFRESH'    => 'Index~mChat vernieuwen',
    'INDEX_IN'               => 'binnen',
    'INDEX_SECONDS'          => 'seconden.',
));
