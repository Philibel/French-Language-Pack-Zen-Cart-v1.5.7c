<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */

  define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');

  // -----
  // Si vous souhaitez inclure des informations supplémentaires dans les informations d\'en-tête de chaque e-mail (comme peut-être l\'adresse du magasin et / ou le numéro de téléphone),
  // définit cette valeur pour qu\'elle contienne le contenu HTML complet à copier, par exemple '<div id="extra-stuff">Trucs supplémentaires pour l\'en-tête</div>'.  //
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

  // Définissez un message que vous souhaitez ajouter à un e-mail de mise à jour de commande
  define('EMAIL_ORDER_UPDATE_MESSAGE',''); 

// office use only - usage de bureau uniquement
  define('OFFICE_FROM','De :');
  define('OFFICE_EMAIL','E-mail :');

  define('OFFICE_USE','Usage professionnel uniquement');
  define('OFFICE_LOGIN_NAME','Nom de connexion :');
  define('OFFICE_LOGIN_EMAIL','E-mail de connexion :');
  define('OFFICE_LOGIN_PHONE','<strong>Téléphone :</strong>');
  define('OFFICE_IP_ADDRESS','Adresse IP :');
  define('OFFICE_HOST_ADDRESS','Adresse de l\'hôte :');
  define('OFFICE_DATE_TIME','Date et heure :');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Cette adresse e-mail nous a été donnée par vous ou par un de nos clients. Si vous pensez avoir reçu cet e-mail par erreur, veuillez envoyer un e-mail à : %s');
  define('EMAIL_SPAM_DISCLAIMER','Cet e-mail vous est adressé en accord avec la loi US CAN-SPAM du 01/01/2004. Les demandes de suppression peuvent être envoyées à cette adresse et seront honorées et respectées.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Propulsé par <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[ENVOI ADMIN CHÈQUES CADEAUX]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[BONS DE RÉDUCTIONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ÉTAT DES COMMANDES]');
  define('TEXT_UNSUBSCRIBE', "\n\nPour vous désabonner de nos futurs bulletins et e-mails promotionnels, cliquez simplement sur le lien suivant : \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Désactivé');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'ALERTE ADMINISTRATIVE : Nouvel utilisateur de l\'administration ajouté.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'ALERTE ADMINISTRATIVE : Un nouvel utilisateur de l\'administration (%s) a été AJOUTÉ à votre boutique par %s.' . "\n\n" . 'Si vous ou un utilisateur autorisé de l\'administration n\'êtes pas à l\'origine de ce changement, il est recommandé que vous vérifiez immédiatemment la sécurité de votre site.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'ALERTE ADMINISTRATIVE : Un utilisateur de l\'administration a été supprimé.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'ALERTE ADMINISTRATIVE : Un utilisateur de l\'administration (%s) a été SUPPRIMÉ de votre boutique par %s.' . "\n\n" . 'Si vous ou un utilisateur autorisé de l\'administration n\'êtes pas à l\'origine de ce changement, il est recommandé que vous vérifiez immédiatemment la sécurité de votre site.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'ALERTE ADMINISTRATIVE : Les détails de l\'utilisateur de l\'administration ont été modifiés.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'ALERTE ADMINISTRATIVE : L\'adresse e-mail de (%s) a été changée de (%s) en (%s) par (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'ALERTE ADMINISTRATIVE : Le nom de l\'utilisateur de l\'administration (%s) a été changé de (%s) en (%s) par (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'ALERTE ADMINISTRATIVE : Le profil de sécurité de l\'utilisateur de l\'administration (%s) a été changé de (%s) en (%s) par (%s)');
