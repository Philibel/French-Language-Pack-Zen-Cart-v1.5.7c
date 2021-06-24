<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Réinitialisation de mot de passe');

define('TEXT_ADMIN_EMAIL', 'Adresse e-mail de l\'administrateur : ');
define('TEXT_ADMIN_USERNAME', 'Nom d\'utilisateur de l\'administrateur');
define('TEXT_BUTTON_REQUEST_RESET', 'Demande de réinitialisation');
define('TEXT_BUTTON_LOGIN', 'Connexion');
define('TEXT_BUTTON_CANCEL', 'Annuler');

define('ERROR_WRONG_EMAIL', 'Vous avez saisi une mauvaise adresse e-mail.');
define('ERROR_WRONG_EMAIL_NULL', 'Bien vu... :-P');
define('MESSAGE_PASSWORD_SENT', 'Un nouveau mot de passe a été envoyé à l\'adresse e-mail que vous avez saisi.<br />Cliquez sur "Connexion" ci-dessous pour vous connecter avec le nouveau mot de passe temporaire.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Votre demande de modification');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Un nouveau mot de passe a été demandé depuis %s.' . "\n\n" . 'Votre nouveau mot de passe temporaire est :' . "\n\n   %s\n\nIl vous sera demandé de choisir un nouveau mot de passe avant de vous connecter.\n\nCe mot de passe temporaire expire dans 24 heures.\n\n\n");

define('TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET', 'Alerte de l\'accès !');
define('TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET', "Failed attempts for admin password resets have been received from %s\n\nInvalid email and/or username supplied.\n\nIf you have admin accounts sharing the same email address you should consider assigning unique email addresses to them, to make resets easier.");

