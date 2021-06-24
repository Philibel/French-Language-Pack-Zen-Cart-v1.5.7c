<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id :Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */


require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAMES . ' Envoyé');

define('TABLE_HEADING_SENDERS_NAME', 'Nom Expéditeur');
define('TABLE_HEADING_VOUCHER_VALUE', 'Valeur du ' . TEXT_GV_NAME);
define('TABLE_HEADING_VOUCHER_CODE', TEXT_GV_REDEEM);
define('TABLE_HEADING_DATE_SENT', 'Date envoyé');
define('TEXT_HEADING_DATE_REDEEMED', 'Date remboursé');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_SENDERS_ID', 'ID Expéditeur ');
define('TEXT_INFO_AMOUNT_SENT', 'Montant envoyé :');
define('TEXT_INFO_DATE_SENT', 'Date d\'envoi :');
define('TEXT_INFO_VOUCHER_CODE', TEXT_GV_REDEEM . ' :');
define('TEXT_INFO_EMAIL_ADDRESS', 'Adresse e-mail :');
define('TEXT_INFO_DATE_REDEEMED', 'Date de remboursement :');
define('TEXT_INFO_IP_ADDRESS', 'Adresse IP :');
define('TEXT_INFO_CUSTOMERS_ID', 'ID Client :');
define('TEXT_INFO_NOT_REDEEMED', 'Non remboursé');
