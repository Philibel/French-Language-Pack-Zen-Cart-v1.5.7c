<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-12 $
 */

define('HEADING_TITLE', 'Groupes de Prix');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Nom du Groupe');
define('TABLE_HEADING_GROUP_AMOUNT', '% de Réduction');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Nouveau groupe de prix');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Éditer le groupe de prix');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Supprimer le groupe de prix');

define('TEXT_NEW_INTRO', 'Veuillez entrer les informations pour ce nouveau groupe');
define('TEXT_EDIT_INTRO', 'Veuillez effectuer les changements nécessaires.');
define('TEXT_DELETE_INTRO', 'Êtes-vous certain(e) de vouloir supprimer ce groupe ?');
define('TEXT_DELETE_PRICING_GROUP', 'Supprimer le groupe de prix');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>ATTENTION :</b> Il y a %s clients encore liés à cette catégorie !');

define('TEXT_GROUP_PRICING_NAME', 'Nom du groupe : ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Pourcentage de réduction : ');
define('TEXT_DATE_ADDED', 'Date de création :');
define('TEXT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_CUSTOMERS', 'Clients dans le groupe  :');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERREUR : Des clients existent dans ce groupe. Veuillez confirmer que vous souhaitez enlever tous les membres du groupe et les supprimer.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTE : Vous avez défini des groupes de prix, mais vous n\'avez pas activé le module total-commande de groupes de prix.<br />Veuillez aller dans Admin-&gt;Modules-&gt;Order Total-&gt;Membership Discount (ot_group_pricing) et installez/configurez le module.');

