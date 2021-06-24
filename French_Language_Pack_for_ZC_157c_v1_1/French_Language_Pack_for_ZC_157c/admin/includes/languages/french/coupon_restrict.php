<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Coupons de réduction - Restrictions catégories/produits');
define('HEADING_TITLE_CATEGORY', 'Restrictions aux Catégories');
define('HEADING_TITLE_PRODUCT', 'Restrictions aux Produits');

define('SUB_HEADING_COUPON_NAME', 'Restrictions pour le coupon nommé &quot;%1$s&quot; [%2$u].');  //-%1$s = coupon-name, %2$u = coupon_id

define('TABLE_HEADING_CATEGORY_ID', 'ID de catégorie');
define('TABLE_HEADING_CATEGORY_NAME', 'Nom de la catégorie');
define('TABLE_HEADING_PRODUCT_NAME', 'Nom du produit');
define('TABLE_HEADING_PRODUCT_ID', 'ID produit');
define('TABLE_HEADING_RESTRICT', 'Restriction');
define('TABLE_HEADING_RESTRICT_REMOVE', 'Supprimer');
define('IMAGE_REMOVE', 'Supprimer ce restriction');
define('TEXT_ALL_CATEGORIES', 'Toutes les catégories');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Ajouter tous les produits de cette catégorie');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Supprimer tous les produits de cette catégorie');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Pour \'Ajouter tous les produits de cette catégorie\', uniquement les produits qui n\'ont pas encore de restrictions seront ajoutés.<br />
                    Pour \'Supprimer tous les produits de cette catégorie\', uniquement les produits indiqués \'Autorisé\' ou \'Interdit\' seront supprimés.</strong>');

define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Catégorie incomplète');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Produit incomplet');

define('HEADER_MANUFACTURER_NAME', '<br> - OU - <br>'. 'Fabricant:');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Ajouter tous les produits du fabricant');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Supprimer tous les produits du fabricant');

define('TABLE_HEADING_STATUS', 'Statut');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Les filtres de catégorie et de fabricant sont réinitialisés. Utilisez les filtres individuellement.');

define('TEXT_PULLDOWN_ALLOW', 'Autoriser');
define('TEXT_PULLDOWN_DENY', 'Refuser');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Ajouter');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Mettre à jour');
define('TEXT_STATUS_TOGGLE', 'Basculer');
define('TEXT_STATUS_TOGGLE_TITLE', 'Cliquez ici pour changer le statut de la restriction');
define('TEXT_ALLOWED', 'Le produit ou la catégorie est autorisé');
define('TEXT_DENIED', 'Le produit ou la catégorie n\'est pas autorisé');

define('TEXT_NO_CATEGORY_RESTRICTIONS', 'Aucune restriction de catégorie actuelle');
define('TEXT_NO_PRODUCT_RESTRICTIONS', 'Aucune restriction de produit actuelle');
