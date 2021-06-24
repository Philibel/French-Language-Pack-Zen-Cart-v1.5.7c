<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Modules de Paiements');
define('HEADING_TITLE_MODULES_SHIPPING', 'Modules de Livraisons');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Modules de Total Commande');

define('TABLE_HEADING_MODULES', 'Modules');
define('TABLE_HEADING_SORT_ORDER', 'Trier les commandes ');
define('TABLE_HEADING_ORDERS_STATUS','Statut des commandes');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_MODULE_DIRECTORY', 'Répertoire du module:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERREUR : Module non chargé à cause de fichier de langue manquant : ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ALERTE : Vos paramètres Admin ont été changés dans votre boutique en ligne.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Ceci est un mail automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : Les paramètres Admin ont été MODIFIÉS pour le module [%s], par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Ceci est un mail automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : Les paramètres Admin ont été modifiés. Le module [%s] a été INSTALLÉ par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Ceci est un mail automatique envoyé par votre boutique Zen Cart pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : Les paramètres Admin ont été modifiés. Le module [%s] a été ENLEVÉ par l\'utilisateur de l\'administration %s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr(e) de vouloir enlever ce module ?');
define('TEXT_WARNING_SSL_EDIT', 'ALERTE : <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Pour des raisons de sécurité, la modification de ce module est désactivée jusqu\'à ce que votre Admin soit configurée pour SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERTE : <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Pour des raisons de sécurité, l\'installation de ce module est désactivée jusqu\'à ce que votre Admin soit configurée pour SSL</a>.');

// Messages de validation génériques pour les modules
define('TEXT_POSITIVE_INT', '%s doit être un entier supérieur ou égal à 0');
define('TEXT_POSITIVE_FLOAT', '%s doit être une décimale supérieure ou égale à 0');
