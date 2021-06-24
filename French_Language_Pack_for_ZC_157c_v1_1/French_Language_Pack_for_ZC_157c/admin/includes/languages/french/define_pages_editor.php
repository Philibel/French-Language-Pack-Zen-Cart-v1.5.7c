<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-12 Modified in v1.5.7 $
 **/

define('HEADING_TITLE', 'Éditeur des pages \'define\' pour: ');

define('TEXT_FILE_DOES_NOT_EXIST', 'Fichier inexistant: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'ERREUR: Impossible d\'écrire dans ce fichier. Veuillez positionner les bonnes permissions utilisateur sur: %s');

define('TEXT_INFO_SELECT_FILE', 'Choisissez un fichier à éditer...');
define('TEXT_INFO_EDITING', 'Édition du fichier:');

define('TEXT_INFO_CAUTION','NOTE: Vous devriez toujours éditer les fichiers situés dans votre répertoire qui a priorité sur le template courant, exemple: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Assurez-vous de faire des sauvegardes après avoir modifié vos fichiers.');
