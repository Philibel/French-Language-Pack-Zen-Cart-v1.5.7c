<?php
/**
 * Constants used by the zen_update_orders_history function.
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-13 Modified in v1.5.7 $
 */

define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------ ');
define('OSH_EMAIL_TEXT_SUBJECT', 'Mise à jour de la commande');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Numéro de commande :');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Détails de la commande :');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Date de la commande :');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Les commentaires de votre commande sont : </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Le statut de votre commande a été mis à jour :' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Le statut de votre commande n\'a pas changé:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong> État actuel : </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong> Ancien état :</strong> %1$s, <strong>Nouvel état :</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Veuillez répondre à cet e-mail si vous avez des questions.' . "\n");
