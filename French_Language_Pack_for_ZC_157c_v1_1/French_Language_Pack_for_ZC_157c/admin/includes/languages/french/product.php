<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-14 Modified in v1.5.7 $
 */


define('TEXT_PRODUCTS_STATUS', 'Statut produit :');
define('TEXT_PRODUCTS_VIRTUAL', 'Produit est virtuel :');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Livraison toujours gratuite :');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Afficher la boîte quantité du produit :');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Date de disponibilité :');
define('TEXT_PRODUCT_AVAILABLE', 'En stock');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Épuisé');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Oui, sauter l\'adresse de livraison');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Non, adresse de livraison requise');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Oui, livraison toujours gratuite');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Non, règles normales de livraison');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Spécial, la combinaison produit/download exige une adresse de livraison');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Oui, afficher la boîte quantité');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Non, ne pas afficher la boîte quantité');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT', 'Avertissement : N\'affiche pas la boîte de quantité, par défaut à la quantité 1');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW', 'Avertissement: N\'affiche pas la boîte de quantité, par défaut à la quantité 1');

define('TEXT_PRODUCTS_MANUFACTURER', 'Fabricant de produits :');
define('TEXT_PRODUCTS_NAME', 'Nom de produits :');
define('TEXT_PRODUCTS_DESCRIPTION', 'Description de produits :');
define('TEXT_PRODUCTS_QUANTITY', 'Quantité de produits :');
define('TEXT_PRODUCTS_IMAGE', 'Image de produits :');
define('TEXT_EDIT_PRODUCTS_IMAGE', 'Modifier l\'image du produit :');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Uploader vers le répertoire :');
define('TEXT_PRODUCTS_URL', 'URL du produit :');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(sans http:// ou https://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Prix (HT) :');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Prix (TTC) :');
define('TEXT_PRODUCTS_WEIGHT', 'Poids à l\'expédition des produits :');

define ('TEXT_PRODUCT_IS_FREE', 'Le produit est gratuit :');
define ('TEXT_PRODUCTS_IS_FREE_PREVIEW', '* Le produit est marqué comme GRATUIT');
define ('TEXT_PRODUCTS_IS_FREE_EDIT', '* Le produit est marqué comme GRATUIT');

define('TEXT_PRODUCT_IS_CALL', 'Le produit est un prix d\'appel :');
define('TEXT_PRODUCTS_IS_CALL_PREVIEW', '* Le produit est marqué comme APPEL POUR PRIX');
define('TEXT_PRODUCTS_IS_CALL_EDIT', '* Le produit est marqué comme APPEL POUR PRIX');

define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES', 'Prix du produit par attributs :');
define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE', 'Oui');
define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE', 'Non');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW', '* Le prix affiché inclura les prix les plus bas des attributs de groupe plus le prix');
define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT', '* Le prix affiché inclura les prix les plus bas des attributs de groupe plus le prix');

define('TEXT_PRODUCTS_TAX_CLASS', 'Classe de taxes :');

define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL', 'Qté produit minimum :');
define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL', 'Unités de quantité de produit :');
define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL', 'Qté produit maximum :');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_PREVIEW', 'Attention : le minimum est inférieur aux unités');
define('TEXT_PRODUCTS_QTY_MIN_UNITS_MISMATCH_PREVIEW', 'Attention : le minimum n\'est pas un multiple d\'unités');

define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT', '0 = Illimité, 1 = No Qty Boxes');

define('TEXT_PRODUCTS_MIXED', 'Qté produit min/unité Mix :');

define('TEXT_PRODUCTS_SORT_ORDER', 'Classement :');

define('TEXT_PRODUCT_MORE_INFORMATION', 'Pour en savoir plus, veuillez consulter cette <a href="https://%s" target="blank">page web</a> du produit.');
define('TEXT_PRODUCT_DATE_ADDED', 'Ce produit a été ajouté à notre catalogue le %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Ce produit sera en stock le %s.');

// meta tags
define('TEXT_META_TAG_TITLE_INCLUDES', '<strong>Sélectionnez les éléments à afficher dans la balise &lt;titre&gt; page (affichée dans cet ordre) :</strong><br><span class="alert">REMARQUE : Si les mots clés et les champs de la balise meta description sont tous deux vides, tous les éléments (à l\'exception du texte supplémentaire du titre) seront définis sur "oui". Cependant, dans ce cas, l\'affichage du modèle de produit et du prix du produit peut être remplacé (désactivé) dans l\'administration à la page : configuration -> Informations sur le produit.</span>');
define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS', '<strong>Nom du produit :</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS', '<strong> Texte supplémentaire du titre :</strong><br>(défini ci-dessous)');
define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS', '<strong>Modèle de produit :</strong>');
define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS', '<strong>Prix du produit :</strong>');
define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS', '<strong>constante définie "SITE_TAGLINE" :</strong>');
define('TEXT_META_TAGS_TITLE', '<strong>Texte supplémentaire du titre :</strong><br><span class="alert">REMARQUE : Le texte supplémentaire du titre n\'est pas utilisé si les champs de balise meta Mots clés et Description sont vides.</span>');
define('TEXT_META_TAGS_KEYWORDS', '<strong>Balise Meta Keywords :</strong>');
define('TEXT_META_TAGS_DESCRIPTION', '<strong>Description de la balise meta :</strong>');
define('TEXT_META_EXCLUDED', '<span class="alert">EXCLUS</span>');
define('TEXT_TITLE_PLUS_TAGLINE', 'Titre du magasin+Slogan'); // cela fait référence aux règles que le propriétaire du magasin a intégrées dans la personnalisation de son catalogue /includes/modules/meta_tags.php et de son fichier lang.

define('TEXT_PRODUCTS_PRICE_INFO', 'Prix :');
