<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-13 Modified in v1.5.7a $
 */
define('HEADING_TITLE', 'Catégories/Produits');
define('HEADING_TITLE_GOTO', 'Aller à :');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Catégories/Produits');

define('TABLE_HEADING_PRICE', 'Prix/Spécial/en Vente');
define('TABLE_HEADING_QUANTITY', 'Quantité');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Trier');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' de ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' actif');
define('TEXT_CATEGORIES', 'Catégories :');
define('TEXT_PRODUCTS', 'Produits :');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Supprimer la catégorie');
define('TEXT_DELETE_CATEGORY_INTRO', 'Êtes-vous sûr de vouloir supprimer cette catégorie ?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Avertissement : </strong>Les produits liés dont l\'ID de catégorie principale est supprimé ne seront pas évalués correctement. Vous devez d\'abord vous assurer que lors de la suppression d\'une catégorie contenant des produits liés, vous réinitialisez le(s) produit(s) vers une autre catégorie avant de supprimer une catégorie.');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Déplacer la catégorie');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Veuillez sélectionner la catégorie dans laquelle vous souhaitez que <b>%s</b> réside');
define('TEXT_MOVE_PRODUCT', 'Déplacer le produit<br><strong>ID#%1$u %2$s</strong><br>de la catégorie actuelle<br><strong>ID#%3$u %4$s</strong><br>à :');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Supprimer le produit/les liens');
define('TEXT_DELETE_PRODUCT_INTRO', 'Supprimer les liens de ce produit vers les catégories ou supprimer complètement le produit.<br />Pour faciliter la liaison/dissociation des produits vers plusieurs catégories, vous pouvez également utiliser le <a href="index.php?cmd=' . FILENAME_PRODUCTS_TO_CATEGORIES . '&amp;products_filter=%u">Gestionnaire de liens pour plusieurs catégories</a>.<br /><br />Les <strong>catégories liées</strong> sont présélectionnées prêtes à être supprimées.<br />La <strong>catégorie principale</strong> (<span class="text-danger">en surbrillance</span>) est désélectionnée pour éviter toute suppression accidentelle.<br /><br />Pour supprimer un produit complètement, sélectionnez TOUTES les catégories, y compris la catégorie principale.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Déplacer le produit');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Déplacer ce produit de cette catégorie vers la catégorie sélectionnée.<br />Si cette catégorie actuelle est également la catégorie principale du produit, elle sera également mise à jour dans la catégorie sélectionnée.<br />');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Catégories actuelles : ');
define('TEXT_INFO_HEADING_COPY_TO', 'Copier vers');
define('TEXT_INFO_CURRENT_PRODUCT', 'Produit actuel : ');
define('TEXT_HOW_TO_COPY', 'Méthode de copie :');
define('TEXT_COPY_AS_LINK', 'Lier ce produit dans une autre catégorie comme sélectionné ci-dessus');
define('TEXT_COPY_AS_DUPLICATE', 'Créer un produit en double dans la catégorie sélectionnée ci-dessus');
define('TEXT_COPY_METATAGS', 'Copier les méta-balises à dupliquer ?');
define('TEXT_COPY_LINKED_CATEGORIES', 'Copier les catégories liées à dupliquer ?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Ouvrir le produit en double pour modification');

//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'Attributs copiés de produit ID#%u pour dupliquer produit ID#%u');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatags pour l\'ID de langue ID#%u copiés depuis produit ID#%u pour dupliquer produit ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'ID de catégorie liée ID#%u copié de produit ID#%u pour dupliquer produit ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Remises copiées de produit ID#%u pour dupliquer produit ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[DUPLICATE]');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Modifications des attributs pour les produits ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Caractéristiques des attributs pour :');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Téléchargements : ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Supprimer <strong>TOUS</strong>les attributs de produit pour :<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Copier les attributs vers un autre <strong>produit</strong> de :<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Copier les attributs dans une autre <strong>catégorie</strong> de :<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Comment les attributs de produit existants doivent-ils être gérés ?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Supprimer</strong> d\'abord, puis copiez les nouveaux attributs');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Mettre à jour</strong> avec de nouveaux paramètres/prix, puis en ajouter de nouveaux');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorer</strong> et n\'ajouter que de nouveaux attributs');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES', 'Copier les attributs de produit à dupliquer ?');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Utilisé uniquement pour les produits en double avec des remises sur quantité ...');
define('TEXT_COPY_DISCOUNTS', 'Copier les remises sur quantité de produit à dupliquer ?');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY','Changer le statut de la catégorie pour :');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Changer le statut de <strong>cette</strong> catégorie en :');
define('TEXT_CATEGORIES_STATUS_OFF', 'Désactivé');
define('TEXT_CATEGORIES_STATUS_ON', 'Activé');
define('TEXT_PRODUCTS_STATUS_INFO', 'Changer le statut de TOUS les produits inclus en :');
define('TEXT_PRODUCTS_STATUS_OFF', 'Désactivé');
define('TEXT_PRODUCTS_STATUS_ON', 'Activé');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Inchangé');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>AVERTISSEMENT ...</strong><br />Remarque : la désactivation de produits (qu\'ils soient liés ou maîtres) dans une catégorie entraînera la désactivation de TOUTES les instances de ce produit dans TOUS catégories.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Changer le statut de TOUTES les sous-catégories en :');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Désactivé');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Activé');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Inchangé');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'AVERTISSEMENT : Vous avez des produits dans la catégorie de premier niveau. Cela empêchera la tarification de fonctionner correctement dans le catalogue. Produits trouvés : ');

define('TEXT_COPY_MEDIA_MANAGER', 'Copier le média ?');
define('SUCCESS_ATTRIBUTES_DELETED', 'Attributs supprimés avec succès');
