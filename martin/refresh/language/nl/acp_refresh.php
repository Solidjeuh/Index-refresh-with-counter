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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
        'REFRESH_VERSION'              => 'Versie',
	'ACP_REFRESH_TITLE'		=> 'Index vernieuwen',
	'REFRESH_SAVED'			=> 'Vernieuw instellingen opgeslagen.',
	'REFRESH_CONFIG_SET'		=> 'Configuratie',
	'REFRESH_ENABLE'			=> 'Schakel de vernieuwing timer in de navigatiebalk in', 
        'REFRESH_ENABLE_EXPLAIN'               => 'Toont de timer in de “navigatiebalk” op de indexpagina.',
        'REFRESH_MCHAT_ENABLE'			=> 'Schakel de vernieuwing timer in op mChat', 
        'REFRESH_MCHAT_ENABLE_EXPLAIN'               => 'Toont de timer enkel in mChat.',
        'REFRESH_ICON_ENABLE'			=> 'Schakel het “laad pictogram” in', 
        'REFRESH_ICON_ENABLE_EXPLAIN'               => 'Schakelt het pictogram voor het laden van de index in.', 
        'ACP_INDEXREFRESH'              =>'Vernieuwtijd instellen',
        'ACP_INDEXREFRESH_EXPLAIN'            =>'Stel de tijd in seconden in. Voorbeeld 1800 = 30 minuten, 3600 = 60 minuten (standaard is 1200 = 20 minuten)',
        'DISABLE_REFRESH'                    =>'<span style="color:#BF0000;">navigatiebalk schakelaar uitgeschakeld. Klik op Verstuur om opnieuw te tonen.</span>', 
        'DISABLE_MCHAT'                    =>'<span style="color:#BF0000;">mChat schakelaar uitgeschakeld. Stel de navigatiebalk in op NEE en klik vervolgens op Verzenden om opnieuw te tonen.</span>',     
));
