<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-12 Modified in v1.5.7 $
 */

// sort orders
define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Afficher la commande: ');
define('TEXT_SORT_PAYPAL_ID_DESC', 'Commande PayPal reçue (nouveau - ancien)');
define('TEXT_SORT_PAYPAL_ID', 'Commande PayPal reçue (ancien - nouveau)');
define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'ID Commande (haut - bas), Commande PayPal reçue');
define('TEXT_SORT_ZEN_ORDER_ID', 'ID Commande (bas - haut), Commande PayPal reçue');
define('TEXT_PAYMENT_AMOUNT_DESC', 'Montant de la commande (haut - bas)');
define('TEXT_PAYMENT_AMOUNT', 'Montant de la commande (bas - haut)');

//begin ADMIN text
define('HEADING_ADMIN_TITLE', 'Notifications de Paiement Instantané PayPal');
define('HEADING_PAYMENT_STATUS', 'Statut PayPal');
define('TEXT_ALL_IPNS', 'Tout');

define('TABLE_HEADING_ORDER_NUMBER', 'Commande #');
define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
define('TABLE_HEADING_TXN_TYPE', 'Type de transaction');
define('TABLE_HEADING_PAYMENT_STATUS', 'Statut du paiement');
define('TABLE_HEADING_PAYMENT_AMOUNT', 'Montant');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_DATE_ADDED', 'Date de création');
define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Nombre d\'entrées dans l\'historique des statuts');
define('TABLE_HEADING_ENTRY_NUM', 'Entrée n&deg;');
define('TABLE_HEADING_TRANS_ID', 'ID Trans.');
define('TABLE_HEADING_PENDING_REASON', 'Raison en attente');

define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
define('TEXT_DISPLAY_PAYPAL_IPN_NUMBER_OF_TX', 'Affiche <b>%d</b> à <b>%d</b> (sur <b>%d</b> Transactions)');

//D\'autres constantes sont dans includes/languages/french/modules/payment/paypal.php
//end ADMIN text
