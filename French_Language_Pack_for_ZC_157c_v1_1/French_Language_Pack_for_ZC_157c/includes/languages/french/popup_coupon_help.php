<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-05 Modified in v1.5.7 $
 */

define('TEXT_CLOSE_WINDOW', 'Fermer la fenêtre [x]');
define('TEXT_COUPON_HELP_HEADER', '<strong>Le code d\'utilisation du coupon de réduction que vous avez entré est pour</strong> ');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nom du coupon : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Ce coupon vous donne droit à %s de remise sur votre commande');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Vous devez dépenser %s pour utiliser ce coupon');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Ce coupon vous donne droit à une livraison gratuite de votre commande');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Description du coupon : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ce coupon est valable du %s au %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restriction à un produit/une catégorie');
define('TEXT_COUPON_HELP_CATEGORIES', 'Catégorie');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produit');

define('TEXT_ALLOWED', ' (Autorisé)');
define('TEXT_DENIED', ' (Interdit)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ce coupon a des restrictions de produit spécifiques.</p>');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ce bon est valable pour toutes les catégories.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ce bon est valable pour tous les produits.</p>');
define('TEXT_NO_PROD_SALES', '<p>Ce coupon n\'est pas valide pour les produits en promotion.</p>');

// gift certificates cannot be purchased with Discount bons
define('TEXT_COUPON_GV_RESTRICTION','Les coupons de réduction ne peuvent être appliqué sur l\'achat de ' . TEXT_GV_NAMES . );

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Des restrictions selon l\'adresse de facturation s\'appliquent.');
