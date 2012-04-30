<?php
/**
*
* @package post_links
* @version $Id: index.php 9614 2010-02-23 11:04:54Z Senky $
* @copyright (c) 2010 Senky
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/info_acp_post_links');

set_config('pl_enable', '0');
set_config('pl_link', '1');
set_config('pl_bbcode', '1');
set_config('pl_html', '1');

trigger_error('POST_LINKS_INSTALLED');

page_header($user->lang['POST_LINK_TITLE']);

page_footer();

?>