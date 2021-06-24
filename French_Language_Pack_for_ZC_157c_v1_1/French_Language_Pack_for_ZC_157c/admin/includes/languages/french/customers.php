<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-14 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Clients');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Prénom');
define('TABLE_HEADING_LASTNAME', 'Nom');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte<br \>créé le');
define('TABLE_HEADING_LOGIN', 'Dernière connexion');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_PRICING_GROUP', 'Groupe de Prix');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autorisé');
define('TABLE_HEADING_GV_AMOUNT', 'Reliquat<br>chèques cadeaux');

define('TEXT_DATE_ACCOUNT_CREATED', 'Compte créé le :');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Dernière modification :');
define('TEXT_INFO_DATE_LAST_LOGON', 'Dernière connexion :');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Nombre de connexions :');
define('TEXT_INFO_COUNTRY', 'Pays :');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Nombre d\'avis :');
define('TEXT_DELETE_INTRO', 'Êtes-vous certain(e) de vouloir supprimer ce client ?');
define('TEXT_DELETE_REVIEWS', 'Supprimer %s avis');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Supprimer le client');
define('TYPE_BELOW', 'Indiquez ci-dessous');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Nombre de commandes :');
define('TEXT_INFO_LAST_ORDER','Dernière commande :');
define('TEXT_INFO_LIFETIME_VALUE', 'Valeur vie client :');
define('TEXT_INFO_ORDERS_TOTAL', 'Total :');
define('CUSTOMERS_REFERRAL', 'Parrainage client<br>1er bon de réduction');
define('TEXT_INFO_GV_AMOUNT', 'Reliquat des chèques cadeaux :');

define('ENTRY_NONE', 'Aucune');

define('TABLE_HEADING_COMPANY','Société');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Réinitialiser le mot de passe du client');
define('TEXT_PWDRESET_INTRO', 'Pour réinitialiser le mot de passe de ce client, entrez un nouveau mot de passe et confirmez-le ci-dessous. Le nouveau mot de passe doit être conforme aux règles de mot de passe normales imposées aux clients.');
define('TEXT_CUST_NEW_PASSWORD', 'Nouveau mot de passe :');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Confirmer le mot de passe :');
define('ERROR_PWD_TOO_SHORT', 'Erreur : le mot de passe est plus court que le nombre de caractères configuré pour la boutique.');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe mis à jour.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Votre mot de passe a été changé par l\'administrateur de la boutique. Votre nouveau mot de passe est : ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Réinitialisation du mot de passe du compte');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Vous avez réinitialisé le mot de passe d\'un client : ' . "\n" . '%s' . "\n\n" . 'ID administrateur : %s');

define('CUSTOMERS_AUTHORIZATION', 'Statut d\'autorisation du client');
define('CUSTOMERS_AUTHORIZATION_0', 'Approuvé');
define('CUSTOMERS_AUTHORIZATION_1', 'En attente d\'approbation - Doit être autorisé pour naviguer');
define('CUSTOMERS_AUTHORIZATION_2', 'En attente d\'approbation - Peut naviguer sans prix affiché');
define('CUSTOMERS_AUTHORIZATION_3', 'En attente d\'approbation - Peut naviguer avec prix sans pouvoir acheter');
define('CUSTOMERS_AUTHORIZATION_4', 'Banni - Non autorisé à se connecter et acheter');  
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'ATTENTION: Votre boutique est configurée en mode Approbation - Sans navigation. Le client a été positionné sur: Attente d\'approbation - Pas de naviguation');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'ATTENTION: Votre boutique est configurée en mode Approbation - Navigation sans prix. Le client a été positionné sur: Attente d\'approbation - Naviguation sans prix');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Votre statut de client a été actualisé. Merci de faire votre marché chez nous. Ce sera un grand plaisir de faire des affaires avec vous.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Statut client mis à jour');

define('ADDRESS_BOOK_TITLE', 'Entrées du carnet d\'adresses');
define('PRIMARY_ADDRESS', '(adresse principale)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTE :</strong></span> Un maximun de %s entrées sont autorisées dans le carnet d\'adresses.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | <a href="%s">%s Entrées</a>');
define('TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE', '');

define('EMP_BUTTON_PLACEORDER_ALT', 'Passer une commande pour ce client');
define('EMP_BUTTON_PLACEORDER', 'Passer la commande');
