<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-11 Modified in v1.5.7 $
 */

if (!defined('HEADING_TITLE')) { //this file included by admin_account.php
  define('HEADING_TITLE', 'Utilisateurs');
}
define('IMAGE_ADD_USER', 'Ajouter Utilisateur');
define('TEXT_ID', 'ID');
define('TEXT_ADMIN_NAME', 'Nom');
define('TEXT_ADMIN_PROFILE', 'Profil');
define('TEXT_CHOOSE_PROFILE', 'Choisissez un profil');
define('TEXT_PASSWORD', 'Mot de passe');
define('TEXT_CONFIRM_PASSWORD', 'Confirmer le mot de passe');
define('TEXT_NO_USERS_FOUND', 'Aucun utilisateur trouvé');
define('TEXT_CONFIRM_DELETE', 'Suppression demandée. Veuillez confirmer : ');
define('ERROR_NO_USER_DEFINED', 'L\'option que vous avez demandé ne peut être prise en compte sans spécifier un utilisateur');
define('ERROR_USER_MUST_HAVE_PROFILE', 'Les utilisateurs doivent avoir un profil assigné');
define('ERROR_DUPLICATE_USER', 'Désolé, un utilisateur de ce nom existe déjà. Veuillez choisir un autre nom.');
define('ERROR_ADMIN_NAME_TOO_SHORT', 'Les noms d\'utilisateur doivent comprendre au moins %s caractères');
define('ERROR_PASSWORD_TOO_SHORT', 'Les mots de passe doivent comprendre au moins %s caractères');
define('SUCCESS_NEW_USER_ADDED', 'Nouvel utilisateur ajouté');
define('SUCCESS_USER_DETAILS_UPDATED', 'Détails de l\'utilisateur modifiés');
define('SUCCESS_PASSWORD_UPDATED', 'Mot de passe modifié');
define('ERROR_ADMIN_INVALID_EMAIL_ADDRESS', 'Désolé, l\'adresse e-mail que vous avez indiqué contient des caractères invalides.');
define('ERROR_ADMIN_INVALID_CHARS_IN_USERNAME', 'Désolé, le nom d\'utilisateur que vous avez saisi contient des caractères invalides.');
