<?php
/**
*
* @author DoYouSpeakWak??
* @package umil
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM
//

$lang = array_merge($lang, array(
	'INSTALL_POST_LINKS'				=> 'Install Post links',
	'INSTALL_POST_LINKS_CONFIRM'		=> 'Are you ready to install the Post links?',
	'POST_LINKS'						=> 'Post links',
	'POST_LINKS_EXPLAIN'				=> 'Install Post links database changes with UMIL auto method.',
	'UNINSTALL_POST_LINKS'				=> 'Uninstall Post links',
	'UNINSTALL_POST_LINKS_CONFIRM'		=> 'Are you ready to uninstall the Post links? All settings and data saved by this mod will be removed!',
	'UPDATE_POST_LINKS'					=> 'Update Post links',
	'UPDATE_POST_LINKS_CONFIRM'			=> 'Are you ready to update Post links?'
));

?>