<?php
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
// Version Française : Benny Philibel.com 2021 v1.5.7c
// Copyright (c) 2012-2017, Vinos de Frutas Tropicales (lat9)
//
define('HEADING_TITLE', 'Afficher les fichiers journaux de débogage');

define('TABLE_HEADING_FILENAME', 'Nom de fichier');
define('TABLE_HEADING_MODIFIED', 'Date de modification');
define('TABLE_HEADING_FILESIZE', 'Taille du fichier (octets)');
define('TABLE_HEADING_DELETE', 'Supprimer ?');
define('TABLE_HEADING_ACTION', 'Action');

define('BUTTON_DELETE_SELECTED', 'Supprimer la sélection');
define('DELETE_SELECTED_ALT', 'Supprimer tous les fichiers sélectionnés');
define('BUTTON_DELETE_ALL', 'Supprimer tout');
define('DELETE_ALL_ALT', 'Supprimer tous les fichiers de la vue courante');

define('ICON_INFO_VIEW', 'Afficher le contenu de ce fichier');

define('DISPLAY_DEBUG_LOGS_ONLY', 'Afficher uniquement les journaux de débogage ?');
define('LOG_SORT_ASC', 'Asc');
define('LOG_SORT_DESC', 'Desc');

define('TEXT_HEADING_INFO', 'Contenu du fichier');

// -----
// Descriptions d'ordre de tri, utilisées dans l'affichage des instructions.
//
define('TEXT_MOST_RECENT', 'le plus récent');
define('TEXT_OLDEST', 'plus ancien');
define('TEXT_SMALLEST', 'plus petit');
define('TEXT_LARGEST', 'plus grand');

// -----
// La chaîne TEXT_INSTRUCTIONS est passée dans sprintf pour produire les instructions données sur l'affichage principal du plugin,
// en utilisant les variables suivantes:
//
// %1$u ... La taille maximale d'un fichier entièrement affiché.
// %2$s ... Contient une chaîne descriptive identifiant l'ordre de tri actuel
// %3$u ... Le nombre de fichiers journaux actuellement affichés.
// %4$u ... Le nombre de fichiers journaux actuellement présents dans les répertoires liés aux journaux.
// %5$s ... Les préfixes "inclus" pour les fichiers journaux affichés.
// %6$s ... Les préfixes "exclus" pour les fichiers journaux affichés.
//
$imageName = zen_image (DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />Les fichiers peuvent être triés par ordre croissant ou décroissant (en fonction de la date de la dernière modification ou de la taille du fichier) en cliquant sur l\'un des Liens <em>Asc</em> ou <em>Desc</em>. Cliquez sur l\'icône ' . $imageName . ' pour afficher le contenu du fichier associé. Seuls les %1$u premiers octets du fichier sélectionné seront lus ; si un fichier est &quot;surdimensionné&quot;, sa <em>taille de fichier</em> sera mise en surbrillance comme <span class="bigfile">this</span>.<br /><br /> Cliquez sur le bouton <strong>supprimer tout</strong> supprimera tous les fichiers en cours de visualisation. Cliquer sur <strong>supprimer la sélection</strong> supprimera uniquement les fichiers dont les cases à cocher sont cochées.<br /><br />Affichage actuel de %2$s %3$u sur %4$u fichiers journaux avec ces préfixes <code>%5$s</code> et <b>ne correspondant pas</b> à ces <code>%6$s</code>.<br />');

define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Supprimer ces \'+n+\' fichiers ?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Supprimer le(s) \'+selected+\' fichier(s) sélectionné(s) ?');

define('WARNING_NOT_SECURE', '<span class="errorText"> REMARQUE : Vous n\'avez pas activé SSL. Le contenu des fichiers que vous affichez à partir de cette page ne sera pas chiffré et pourrait présenter un risque de sécurité.</span>');
define('WARNING_NO_FILES_SELECTED', 'Aucun fichier n\'a été sélectionné pour suppression !');
define('WARNING_SOME_FILES_DELETED', 'Avertissement : Seuls %u des fichiers journaux %u ont été supprimés; vérifiez les autorisations.');
define('SUCCESS_FILES_DELETED', '%u fichiers journaux ont été supprimés.');