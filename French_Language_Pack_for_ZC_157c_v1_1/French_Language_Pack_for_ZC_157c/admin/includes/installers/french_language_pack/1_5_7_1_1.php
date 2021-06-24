<?php

/**
 * French Language Pack
 * @version 1.5.7.1.1
 * @author Zen4All with minor adaptions for the French version 1.1 for Zen Cart 1.5.7c by Benny Philibel
 * @copyright (c) 2014-2020, Zen4All
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 */
/*
 * Added a version installer to the module, so the current version of the language pack can be tracked. *
 *
 */
 
/* Create the admin-page entry for the plugin's configuration */
if (!zen_page_key_exists('configFrenchLanguagePack')) {
  zen_register_admin_page('configFrenchLanguagePack', 'BOX_CONFIGURATION_FRENCH_LANGUAGE_PACK', 'FILENAME_CONFIGURATION', 'gID=' . $configuration_group_id, 'configuration', 'Y', (int)$configuration_group_id);
}
 
$db->Execute("UPDATE " . TABLE_CONFIGURATION_GROUP . "
              SET visible = 0
              WHERE configuration_group_id = " . $configuration_group_id . ";");
