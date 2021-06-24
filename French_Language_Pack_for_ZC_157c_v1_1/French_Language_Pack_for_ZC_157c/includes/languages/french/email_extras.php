<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-06 Modified in v1.5.7 $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '550');
define ('EMAIL_LOGO_HEIGHT', '110');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM','<strong>De :</strong>');
define('OFFICE_EMAIL','<strong>E-mail :</strong>');

define('OFFICE_USE','<strong>Usage professionnel uniquement:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Nom de connexion:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>E-mail de connexion </strong>');
define('OFFICE_LOGIN_PHONE','<strong>Téléphone:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>Adresse IP:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Adresse de l\'hôte:</strong>');
define('OFFICE_DATE_TIME','<strong>Date et heure:</strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('EMAIL_TEXT_TELEPHONE', 'Telephone: ');

// email disclaimer
define('EMAIL_DISCLAIMER', 'Cette adresse e-mail nous a été donnée par vous ou par un de nos clients. Si vous pensez avoir reçu cet e-mail par erreur, veuillez envoyer un e-mail à: %s');
define('EMAIL_SPAM_DISCLAIMER','');
// Define a message you'd like to add to an order confirmation email
define('EMAIL_ORDER_MESSAGE','');
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\nPour vous désabonner de nos futurs bulletins et e-mails promotionnels, cliquez simplement sur le lien suivant: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANT:</strong> Pour votre protection et pour empêcher tout usage malveillant, tous les mails envoyés depuis ce site web sont journalisés, leur contenu enregistré et disponible pour le gérant. Si vous estimez avoir reçu cet e-mail par erreur, veuillez contacter par mail ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Ce message figure dans tous les e-mails envoyés depuis ce site :</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CRÉER UN COMPTE]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[CHÈQUE CADEAU CLIENT ENVOYÉ]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NOUVELLE COMMANDE]');

// Low Stock E-mails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK','ATTENTION: Stock bas');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapport de stock bas: ');
