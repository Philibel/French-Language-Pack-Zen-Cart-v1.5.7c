<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-10 Modified in v1.5.7 $
 */

define('HEADING_TITLE', 'Coupons de Réductions');
define('HEADING_TITLE_STATUS', 'Statut : ');

define('TEXT_COUPON', 'Nom du coupon :');
define('TEXT_COUPON_ALL', 'Tous les coupons');
define('TEXT_COUPON_ACTIVE', 'Bons actifs');
define('TEXT_COUPON_INACTIVE', 'Bons inactifs');
define('TEXT_SUBJECT', 'Sujet:');
define('TEXT_UNLIMITED', 'Illimité');
define('TEXT_FROM', 'De :');
define('TEXT_FREE_SHIPPING', 'Livraison gratuite');
define('TEXT_MESSAGE', 'Message:');
define('TEXT_RICH_TEXT_MESSAGE','Message au format Rich-Text :');
define('TEXT_CONFIRM_DELETE', 'Êtes-vous certain(e) de vouloir supprimer ce coupon ?');
define('TEXT_SEE_RESTRICT', 'Actif');

define('TEXT_COUPON_ANNOUNCE','Nous sommes heureux de vous offrir un coupon de réduction sur notre boutique');

define('TEXT_TO_REDEEM', 'Vous pouvez utiliser ce coupon au moment de l\'encaissement. Il vous suffira de saisir le code indiqué dans le champ prévu à cet effet et de cliquer sur le bouton de remise.');
define('TEXT_VOUCHER_IS', 'Le code du coupon est ');
define('TEXT_REMEMBER', 'Ne perdez pas le code du coupon, assurez-vous de le garder dans un endroit sûr pour pouvoir bénéficier de cette offre spéciale.');
define('TEXT_VISIT', 'À bientôt sur %s');
define('TEXT_COUPON_HELP_DATE', '<p>Le coupon est valide entre %s et %s</p>');
define('HTML_COUPON_HELP_DATE', '<p>Le coupon est valide entre %s et %s</p>');

define('TABLE_HEADING_ACTION', 'Action');

define('CUSTOMER_ID', 'ID Client');
define('CUSTOMER_NAME', 'Nom client');
define('REDEEM_DATE', 'Date remboursé');
define('IP_ADDRESS', 'Adresse IP');

define('TEXT_REDEMPTIONS', 'Rachats');
define('TEXT_REDEMPTIONS_TOTAL', 'Au total');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Pour ce client');
define('TEXT_NO_FREE_SHIPPING', 'Pas de livraison gratuite');

define('NOTICE_EMAIL_SENT_TO', 'NOTE: E-mail adressé à %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'ERREUR: Aucun client sélectionné.');
define('ERROR_NO_SUBJECT', 'ERREUR: Aucun sujet saisi.');

define('COUPON_NAME', 'Nom du coupon');
//define('COUPON_VALUE', 'Valeur du coupon');
define('COUPON_AMOUNT', 'Montant du coupon');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'Par ordre');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'Par article éligible');
define('COUPON_CODE', 'Code de coupon');
define('COUPON_STARTDATE', 'Date de début');
define('COUPON_FINISHDATE', 'Date de fin');
define('COUPON_RESTRICTIONS', 'Restrictions');
define('COUPON_FREE_SHIP', 'Livraison gratuite');
define('COUPON_DESC', 'Description du coupon<br />(visible par le client)');
define('COUPON_MIN_ORDER', 'Commande minimum pour utiliser le coupon');

define('COUPON_TOTAL', 'Minimum de coupon calculé à partir de : ');
define('TEXT_COUPON_TOTAL_PRODUCTS', 'Produits autorisés');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basé sur le total des produits autorisés selon les règles de restriction des coupons)');
define('TEXT_COUPON_TOTAL_ORDER', 'Tous les produits');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Basé sur le total de la commande complète de tous les produits indépendamment des restrictions de coupon éligibles)');

define('COUPON_USES_COUPON', 'Utilisations par coupon');
define('COUPON_USES_USER', 'Utilisations par client');
define('COUPON_PRODUCTS', 'Liste de produits valides');
define('COUPON_CATEGORIES', 'Liste des catégories valides');
define('DATE_CREATED', 'Date de création');
define('DATE_MODIFIED', 'Date de modification');
define('TEXT_HEADING_NEW_COUPON', 'Créer un nouveau coupon');
define('TEXT_NEW_INTRO', 'Veuillez remplir les informations suivantes pour le nouveau coupon.<br />');
define('COUPON_ZONE_RESTRICTION', 'Restriction de zone de coupon : ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Les restrictions de zone de coupon sont facultatives.');
define('COUPON_ORDER_LIMIT', 'Commandes précédentes du client inférieures à : ');
define('COUPON_ORDER_LIMIT_HELP', 'Le client doit avoir des commandes antérieures inférieures à, laisser vide pour illimité');

define('COUPON_IS_VALID_FOR_SALES', 'Coupon valable pour les ventes : ');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Le coupon EST autorisé pour les produits en vente');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Le coupon est valable pour les produits en vente ou spéciaux');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Coupon NON autorisé pour les produits en vente ou spéciaux');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Le coupon n\'est pas valide pour les produits en vente ou spéciaux');


define('ERROR_NO_COUPON_AMOUNT', 'Aucun montant de coupon entré');
define('ERROR_NO_COUPON_NAME', 'Aucun nom de coupon entré');
define('ERROR_COUPON_EXISTS', 'Un coupon avec ce code existe déjà');


define('COUPON_NAME_HELP', 'Un nom court pour le coupon');
define('COUPON_AMOUNT_HELP', 'La valeur de la remise pour le coupon, soit fixe, soit ajouter un % à la fin pour une remise en pourcentage.<br />Par commande ou par article éligible s\'applique uniquement lorsque le montant est utilisé.');
define('COUPON_CODE_HELP', 'Vous pouvez entrer votre propre code ici, ou laisser vide pour un code généré automatiquement.');
define('COUPON_STARTDATE_HELP', 'La date à laquelle le coupon sera valide à partir de');
define('COUPON_FINISHDATE_HELP', 'La date à laquelle le coupon expire');
define('COUPON_FREE_SHIP_HELP', 'Le coupon donne la livraison gratuite sur une commande.');
define('COUPON_DESC_HELP', 'Une description du coupon pour le client');
define('COUPON_MIN_ORDER_HELP', 'Commande minimum de coupon');
define('COUPON_TOTAL_HELP', 'Si vous spécifiez une commande minimum de coupon pour ce coupon de réduction, voulez-vous que le montant minimum soit basé sur les produits autorisés conformément aux règles de restriction de coupon ou sur le total de la commande, lorsque vous déterminez si la commande minimum de coupon a a été atteint?<br />REMARQUE : Le total de la commande complète signifie qu\'au moins 1 des produits soumis à restrictions éligibles doit être dans le panier pour que le coupon de réduction fonctionne.');
define('COUPON_SALE_HELP', 'Si vous choisissez<i>NON autorisé</i>, les produits en solde ou spéciaux ne seront pas réduits ou comptés dans la commande minimum du coupon.');
define('COUPON_USES_COUPON_HELP', 'Le nombre maximum de fois que le coupon peut être utilisé, laissez vide si vous ne voulez pas de limite.');
define('COUPON_USES_USER_HELP', 'Nombre de fois qu\'un utilisateur peut utiliser le coupon, laissez vide pour aucune limite.');
define('COUPON_BUTTON_PREVIEW', 'Aperçu');
define('COUPON_BUTTON_CONFIRM', 'Confirmer');

define('COUPON_ACTIVE', 'Statut');
define('COUPON_START_DATE', 'Démarre');
define('COUPON_EXPIRE_DATE', 'Expire');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Gestion des bons de réduction multiples</strong><br /><br />Cliquez sur le bon de réduction pour baser les modifications sur<br />ou utilisez le code de coupon de base sélectionné : <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'Le bon de réduction NE PEUT PAS être désactivé. Ce bon de réduction est le bon de réduction de bienvenue<br /><br />Modifiez le bon de réduction de bienvenue avant d\'essayer de le supprimer. Voir Admin->Configuration->Coupons GV' );
define('SUCCESS_COUPON_DISABLED', 'Succès! Le coupon de réduction a été défini sur Inactif ...');
define('TEXT_COUPON_NEW', 'Utiliser le NOUVEAU code de réduction : ');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'ATTENTION! Le coupon en double existe ... Copie annulée pour le code coupon : ');
define('TEXT_CONFIRM_COPY', 'Êtes-vous sûr de vouloir copier ce bon de réduction sur un autre bon de réduction?');
define('SUCCESS_COUPON_DUPLICATE', 'Succès! Le coupon de réduction a été dupliqué ...<br /><br />Assurez-vous de vérifier le nom et les dates du coupon ...');
define('WARNING_COUPON_DUPLICATE', 'Attention! Aucun coupon de réduction n\'a été effectué ! Le nombre de coupons de réduction à créer n\'a pas été défini ...');

define('TEXT_COUPON_COPY_INFO', 'Copier pour plusieurs doublons');
define('TEXT_COUPON_COPY_DUPLICATE', 'Créer plusieurs coupons avec le code de coupon de base de :');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'Combien de coupons de réduction en double voulez-vous créer ?');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Supprimer tous les bons de réduction correspondants en fonction du code de coupon de base<br />Exemple :<strong>%s</strong> supprimerait tous les codes de bons de réduction commençant par : <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Supprimer tous les bons de réduction correspondant au code de base : ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Coupon de réduction par e-mail');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Confirmer la suppression du coupon de réduction');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Confirmer le coupon de réduction de restauration');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Modifier le coupon de réduction');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Supprimer le coupon de réduction');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Restaurer le coupon de réduction');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Restreindre le coupon de réduction');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Rapport sur les bons de réduction');
define('TEXT_DISCOUNT_COUPON_COPY', 'Copier le coupon de réduction');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Copier sur plusieurs coupons de réduction');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Supprimer plusieurs coupons de réduction');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Rapport sur les bons de réduction multiples');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Télécharger plusieurs codes de réduction');
define('REDEEM_ORDER_ID', 'Commande n °');
define('SUCCESS_COUPON_REACTIVATE', 'Réactivation réussie');
define('TEXT_CONFIRM_REACTIVATE', 'Êtes-vous sûr de vouloir restaurer ce coupon?<br />REMARQUE : la restauration n\'affecte pas les dates de début / d\'expiration.<br />La restauration n\'affecte pas les limites d\'utilisation par coupon / utilisation par client si déjà racheté. ');

define('SUCCESS_COUPON_FOUND', 'Coupon de réduction trouvé!');
define('ERROR_COUPON_NOT_FOUND', 'Coupon de réduction introuvable!');
define('ERROR_NO_COUPON_CODE', 'Code de coupon de réduction non saisi!');
define('ERROR_NO_COUPONS', 'Pas de coupons');
