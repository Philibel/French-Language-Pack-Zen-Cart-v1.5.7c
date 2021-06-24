<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Qui est en ligne ?');
define('TABLE_HEADING_ONLINE', 'En Ligne');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nom Complet');
define('TABLE_HEADING_IP_ADDRESS', 'Adresse IP');
define('TABLE_HEADING_SESSION_ID', 'ID Session');
define('TABLE_HEADING_ENTRY_TIME', 'Heure d\'Entrée');
define('TABLE_HEADING_LAST_CLICK', 'Dernier Clic');
define('TIME_PASSED_LAST_CLICKED', '<strong>Temps passé depuis dernier clic:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Dernière URL vue');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_SHOPPING_CART', 'Utilisateurs du Panier');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Sous-total');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Actuellement, il y a %s client(s) en ligne');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'RÉACTUALISER LA LISTE');
define('WHOS_ONLINE_LEGEND_TEXT', 'Légende:');
define('WHOS_ONLINE_ACTIVE_TEXT', 'Actif avec panier');
define('WHOS_ONLINE_INACTIVE_TEXT', 'Inactif avec panier');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT', 'Actif sans panier');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT', 'Inactif sans panier');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT', 'Considéré inactif si dernier clic >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT', 'Quelqu\'un d\'inactif depuis son arrivée >');
define('WHOS_ONLINE_REMOVED_TEXT', 'sera effacé');

define('TEXT_SESSION_ID', '<strong>ID de session:</strong> ');
define('TEXT_HOST', '<strong>Hôte:</strong> ');
define('TEXT_USER_AGENT', '<strong>Navigateur:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Panier vide</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Exclure les spiders ?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Exclure les adresses IP Admin ?');

// show Last Clicked time and host name - 1 both(default), 0=time-only
if (!defined('WHOIS_SHOW_HOST')) define('WHOIS_SHOW_HOST', '1');

define('TEXT_DUPLICATE_IPS', 'Adresses IP en double:');
define('TEXT_TOTAL_UNIQUE_USERS', 'Nombre total d\'utilisateurs uniques:');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Mise à jour ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'toutes les %s secondes.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'manuelle');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30 sec');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10 min');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14 min');
