<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Commandes');
define('HEADING_TITLE_DETAILS', 'Details de commande (#%u)');     //-%u is filled in with the actual order-number
define('HEADING_TITLE_SEARCH', 'ID Commande :');
define('HEADING_TITLE_STATUS', 'État :');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Recherche par nom de produit ou <strong>ID:XX</strong> ou modèle ');
define('HEADING_TITLE_SEARCH_ALL', 'Rechercher : ');
define('HEADING_TITLE_SEARCH_PRODUCTS', 'Recherche de produits : ');
define('TEXT_RESET_FILTER', 'Supprimer le filtre de recherche');
define('TABLE_HEADING_PAYMENT_METHOD', 'Paiement<br />Livraison');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Facturation et livraison ne correspondent pas');

define('TABLE_HEADING_COMMENTS', 'Commentaires');
define('TABLE_HEADING_CUSTOMERS', 'Client');
define('TABLE_HEADING_ORDER_TOTAL', 'Total Commande');
define('TABLE_HEADING_DATE_PURCHASED', 'Date Achat');
define('TABLE_HEADING_STATUS', 'État');
define('TABLE_HEADING_TYPE', 'Type de commande');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Qté.');
define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_TAX', 'Taxe');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix HT');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prix TTC');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total HT');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total TTC');
define('TABLE_HEADING_PRICE', 'Prix');
define('TABLE_HEADING_UPDATED_BY', 'Mis à jour par');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Client notifié');
define('TABLE_HEADING_DATE_ADDED', 'Date ajoutée');

define('ENTRY_CUSTOMER', 'Client :');
define('ENTRY_CUSTOMER_ADDRESS', 'Adresse du client:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'VENDU À :');
define('ENTRY_SHIP_TO', 'LIVRÉ À :');
define('ENTRY_SHIPPING_ADDRESS', 'Adresse de<br />livraison :');
define('ENTRY_BILLING_ADDRESS', 'Adresse de<br />facturation : <br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Méthode de paiement :');
define('ENTRY_CREDIT_CARD_TYPE', 'Type de carte de crédit :');
define('ENTRY_CREDIT_CARD_OWNER', 'Titulaire de la carte de crédit :');
define('ENTRY_CREDIT_CARD_NUMBER', 'N° de la carte de crédit :');
define('ENTRY_CREDIT_CARD_CVV', 'N° CVV de la carte de crédit :');
define('ENTRY_CREDIT_CARD_EXPIRES', 'La carte de crédit expire le :');
define('ENTRY_SHIPPING', 'Livraison :');
define('ENTRY_DATE_PURCHASED', 'Date de commande :');
define('ENTRY_STATUS', 'État :');
define('ENTRY_NOTIFY_CUSTOMER', 'Notifier client :');
define('ENTRY_NOTIFY_COMMENTS', 'Commentaires annotés :');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Supprimer la commande');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous certain(e) de vouloir supprimer cette commande ?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Remettre en stock les quantités des produits');
define('TEXT_DATE_ORDER_CREATED', 'Date de création:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Dernière modification:');
define('TEXT_INFO_PAYMENT_METHOD', 'Méthode de paiement:');

define('TEXT_ALL_ORDERS', 'Toutes les commandes');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualisation de la commande');
define('EMAIL_TEXT_ORDER_NUMBER', 'Numéro de commande :');
define('EMAIL_TEXT_INVOICE_URL', 'Détails de la facture :');
define('EMAIL_TEXT_DATE_ORDERED', 'Date de commande :');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Les commentaires joints à votre commande sont les suivants : </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Votre commande a été positionnée dans l\'état suivant :' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Nouvel état:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Veuillez nous contacter par retour de mail si vous avez quelque question.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'ERREUR: Commande inexistante.');
define('SUCCESS_ORDER_UPDATED', 'SUCCÈS : La commande a été actualisée avec succès.');
define('WARNING_ORDER_NOT_UPDATED', 'ATTENTION : Aucune modification. Commande non actualisée.');

define('ENTRY_ORDER_ID','Commande n° ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">GRATUIT</span>');

define('TEXT_DOWNLOAD', 'Téléchargement');
define('TEXT_DOWNLOAD_TITLE', 'Statut de téléchargement de la commande');
define('TEXT_DOWNLOAD_STATUS', 'Statut');
define('TEXT_DOWNLOAD_FILENAME', 'Nom du fichier');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Jours');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Compteur');

define('TEXT_DOWNLOAD_AVAILABLE', 'Disponible');
define('TEXT_DOWNLOAD_EXPIRED', 'Expiré');
define('TEXT_DOWNLOAD_MISSING', 'Pas sur le serveur');

define('TEXT_EXTENSION_NOT_UNDERSTOOD', 'L\'extension de fichier %s n\'est pas prise en charge'); 
define('TEXT_FILE_NOT_FOUND', 'Fichier non trouvé'); 
define('IMAGE_ICON_STATUS_CURRENT', 'Statut - Disponible');
define('IMAGE_ICON_STATUS_EXPIRED', 'Statut - Expiré');
define('IMAGE_ICON_STATUS_MISSING', 'Statut - Manquant');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Download activé avec succès');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Download désactivé avec succès');
define('TEXT_MORE', '... plus');

define('TEXT_INFO_IP_ADDRESS', 'Adresse IP : ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Supprimer CVV de la base de données');
define('TEXT_DELETE_CVV_REPLACEMENT','Supprimé');
define('TEXT_MASK_CC_NUMBER','Masquer ce numèro');

define('TEXT_INFO_EXPIRED_DATE', 'Date d\'expiration :<br />');
define('TEXT_INFO_EXPIRED_COUNT', 'Nombre expirés :<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Commentaires<br />Client');
define('TEXT_COMMENTS_YES', 'Commentaires clients - OUI');
define('TEXT_COMMENTS_NO', 'Commentaires clients - NON');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Rechercher un client ');

define('TEXT_INVALID_ORDER_STATUS', '<span class = "alert">(État de la commande invalide)</span>');

define('BUTTON_TO_LIST', 'Liste de commandes');
define('SELECT_ORDER_LIST', 'Aller à la commande:');

define('TEXT_MAP_CUSTOMER_ADDRESS', 'Carte : l\'adresse du client');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Carte : l\'adresse de livraison');
define('TEXT_MAP_BILLING_ADDRESS', 'Carte : l\'adresse de facturation');

define('TEXT_EMAIL_LANGUAGE', 'Langue de commande : %s');
define('SUCCESS_EMAIL_SENT', 'Email %s envoyé au client');
