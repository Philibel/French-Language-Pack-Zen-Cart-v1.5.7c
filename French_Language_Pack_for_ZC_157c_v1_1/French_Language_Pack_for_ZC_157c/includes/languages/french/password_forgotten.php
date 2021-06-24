<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-04 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Connexion');
define('NAVBAR_TITLE_2', 'Mot de passe oublié');

define('HEADING_TITLE', 'Mot de passe oublié');

define('TEXT_MAIN', 'Entrez ci-dessous l\'adresse e-mail de votre compte client et nous vous enverrons un message contenant votre nouveau mot de passe.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nouveau mot de passe');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Un nouveau mot de passe a été demandé depuis ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Votre nouveau mot de passe pour vous connecter sur \'' . STORE_NAME . '\' est :' . "\n\n" . '   %s' . "\n\nAprès vous être connecté(e) à l\'aide du nouveau mot de passe, vous pouvez le changer en allant dans 'Mon compte'");

define('SUCCESS_PASSWORD_SENT', 'Un nouveau mot de passe a été envoyé à votre adresse e-mail.');
