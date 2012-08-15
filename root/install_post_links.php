<?php
/**
*
* @author DoYouSpeakWak??
* @package umil
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/


/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The language file which will be included when installing
$language_file = 'mods/umil_post_links_install';

// The name of the mod to be displayed during installation.
$mod_name = 'POST_LINKS';

/*
* The name of the config variable which will hold the currently installed version
* You do not need to set this yourself, UMIL will handle setting and updating the version itself.
*/
$version_config_name = 'post_links_version';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(

	// Version 1.0.0
	'1.0.0'	=> array(
		// Adding the table. All this information is avaliable in phpbb_modules, after you install the module manually.
		'module_add' => array(
			array('acp', 'ACP_MESSAGES', array(
				'module_basename'	=> 'post_links',
				'module_langname'	=> 'ACP_POST_LINKS_TITLE',
				'module_mode'		=> 'default',
				'module_auth'		=> 'acl_a_board',
				),),
		),

		// Lets add a config setting
		'config_add' => array(
			array('pl_enable', 0),
			array('pl_link', 1),
			array('pl_bbcode', 1),
			array('pl_html', 1),
		),

		//Cache purge
		'cache_purge' => array(
			'template', // All of them
			array(), // Purge the forum's cache folder
		),
	),

	// Version 1.0.1
	'1.0.1'	=> array(
		// no change in DB, just purge templates
		'cache_purge' => array(
			'template', // All of them
			array(), // Purge the forum's cache folder
		),
	),

	// Version 1.0.2
	'1.0.2'	=> array(
		// no change in DB, just purge templates
		'cache_purge' => array(
			'template', // All of them
			array(), // Purge the forum's cache folder
		),
	),
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>