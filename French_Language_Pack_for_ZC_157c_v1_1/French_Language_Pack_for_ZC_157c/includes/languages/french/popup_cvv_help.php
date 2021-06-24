<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-06 $
 */

define('HEADING_CVV', 'Que signifie CVV ?');
define('TEXT_CVV_HELP1', '<strong>Card Verification Number. Il s\'agit du cryptogramme des cartes bancaires Visa, Mastercard, Discover...</strong><br /><br />
                    Pour votre sécurité et la protection de vos données personnelles, nous vous demandons d\'entrer le numéro de vérification de votre carte bancaire.<br /><br />
                    Ce numéro de vérification est formé par les 3 derniers chiffres qui figurent au dos de votre carte.
                    Ces chiffres sont habituellement imprimés à droite ou à gauche de votre numéro principal.<br /><br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', '<strong>Cryptogramme à 4 chiffres des Cartes American Express</strong><br /><br />
                    Pour votre sécurité et la protection de vos données personnelles, nous vous demandons d\'entrer le numéro de vérification de votre carte bancaire.<br />
                    Le numéro de vérification est le numéro formé par les 3 derniers chiffres qui figurent au recto de votre carte.
                    Ces chiffres sont habituellement imprimés à droite de votre numéro principal.<br /><br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', '[ Fermer la fenêtre [x] ]');
