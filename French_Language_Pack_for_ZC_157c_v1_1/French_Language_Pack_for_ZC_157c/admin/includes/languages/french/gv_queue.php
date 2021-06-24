<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-14 $
 */

require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' - Queue de déblocage');

define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDERS_ID', 'Commande n&deg;');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valeur ' . TEXT_GV_NAME);
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'achat');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Vous avez récemment acheté un ' . TEXT_GV_NAME . ' sur notre boutique en ligne.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Pour des questions de sécurité, celui-ci ne vous a pas été immédiatement crédité.' .
                                          'Cependant, ce montant a maintenant été débloqué. Vous pouvez vous rendre sur notre site, vous connecter, et adresser la valeur de votre ' . TEXT_GV_NAME . ' à la personne de votre choix via un e-mail, ou simplement utiliser ce montant pour vous-même.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Le ' . TEXT_GV_NAME . ' que vous avez acheté est d\'une valeur de %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Nous vous remercions pour votre confiance !');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Achat');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Commande #');

define('TEXT_EDIT_ORDER','Éditer la Commande ID# ');
define('TEXT_GV_NONE','Aucun ' . TEXT_GV_NAME . ' à débloquer');
