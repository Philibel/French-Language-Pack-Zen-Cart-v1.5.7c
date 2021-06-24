<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-13 Modified in v1.5.7 $
 */


define('HEADING_TITLE', 'Promotions');

define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_STOCK', 'Stock');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Produits Prix/Promotion/Solde');
define('TABLE_HEADING_AVAILABLE_DATE', 'Disponible');
define('TABLE_HEADING_EXPIRES_DATE','Expire');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_ADD_SPECIAL_SELECT', 'Ajouter spécial par sélection');
define('TEXT_ADD_SPECIAL_PID', 'Ajouter spécial par ID de produit');
define('TEXT_SEARCH_SPECIALS', 'Rechercher les promotions actuelles');
define('TEXT_SPECIAL_ACTIVE', 'Prix spécial actif');
define('TEXT_SPECIAL_INACTIVE', 'Prix spécial inactif');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Statut défini par dates');

define('TEXT_SPECIALS_PRODUCT', 'Produit :');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Prix promotionnel :');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Date de disponibilité :');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Date d\'expiration :');

define('TEXT_INFO_DATE_ADDED', 'Date de création :');
define('TEXT_INFO_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_NEW_PRICE', 'Nouveau prix :');
define('TEXT_INFO_ORIGINAL_PRICE', 'Prix d\'origine :');
define('TEXT_INFO_DISPLAY_PRICE', 'Prix affiché :');
define('TEXT_INFO_STATUS_CHANGED', 'Statut changé :');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Supprimer la promotion');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous certain de vouloir supprimer la promotion ?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'ATTENTION : Aucun ID de produit indiqué.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'ATTENTION : Produit ID#%u déjà en promotion.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'ATTENTION : Produit ID#%u n\'exist pas.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Avertissement : produit ID#%u est un ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Ajouter un prix spécial par l\'ID du produit');
define('TEXT_INFO_PRE_ADD_INTRO', 'Vous pouvez ajouter un prix spécial par ID de produit. Cette méthode peut être appropriée pour les magasins proposant de nombreux produits si le rendu de la page de sélection prend trop de temps ou si la sélection d\'un produit dans la liste déroulante devient compliquée.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Insérer le produit ID : ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Notes :</b><ul><li>Le prix spécial peut être un prix (hors taxe). Le séparateur décimal doit être un "," (virgule décimale), par exemple : <b>49,99</b>. Le pourcentage de remise calculé est indiqué à côté du nouveau prix du produit dans le catalogue.</li><li>Le prix spécial peut être un pourcentage de remise, par exemple : <b>20%</b>.</li><li>Les dates de début/fin ne sont pas obligatoires. Vous pouvez laisser la date d\'expiration vide pour aucune expiration.</li><li>Lorsque les dates sont définies, le statut du prix spécial est automatiquement activé/désactivé en conséquence.</li><li>' . TEXT_INFO_PRE_ADD_INTRO . '</li></ul>');
