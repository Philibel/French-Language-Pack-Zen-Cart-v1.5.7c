<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-13 Modified in v1.5.7 $
 */

define('HEADING_TITLE','Gestion des liens produits à catégories multiples');
define('HEADING_TITLE2','Catégories / Produits');//used by prev_next if HEADING_TITLE not defined...so never used!

//Select Product
define('TEXT_HEADING_PRODUCT_SELECT', 'Sélectionner un produit');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'ATTENTION: Le produit a été réinitialisé et ne fait plus partie de cette catégorie ...');

// Change Master Category
define('TEXT_PRODUCTS_ID_INVALID', 'ATTENTION: ID DE PRODUIT INVALIDE OU AUCUN PRODUIT SÉLECTIONNÉ');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE', 'Un produit a un ID de catégorie principale (à des fins de tarification) qui peut être considéré comme la catégorie dans laquelle le produit <i>réside réellement</i>. De plus, un produit peut être <i>lié</i> (copié) à n\'importe quel nombre d\'autres catégories, où le prix peut être modifié en raison des conditions de ces catégories liées.<br>L\'ID de la catégorie principale peut être modifié à l\'aide de cette liste déroulante de catégorie principale, qui propose uniquement les catégories <strong>actuellement liées</strong> comme alternatives possibles.<br>Pour définir l\'ID de catégorie principale sur une <strong>autre</strong> catégorie, commencez par le lier à une nouvelle catégorie en utilisant le tableau ci-dessous, et Update. Utilisez ensuite cette liste déroulante pour réaffecter la catégorie principale à cette nouvelle catégorie.');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Sélectionnez le produit par ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Définir des liens produit à catégories pour: ');
define('TEXT_PRODUCTS_ID', 'Produit ID# ');
define('TEXT_PRODUCTS_NAME', 'Produit: ');
define('TEXT_PRODUCTS_PRICE', 'Prix: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Actualisation des liens de catégorie');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Sélectionnez un produit à lier');
define('BUTTON_CATEGORY_LISTING', 'Liste des catégories');

// Link product to multiple categories
define('TEXT_HEADING_LINKED_CATEGORIES', 'Catégories liées');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>ATTENTION:</strong> Vous devez définir l\'ID de CATÉGORIE MAÎTRE avant de changer les catégories liées');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', 'L\'outil lieur produits à catégories est conçu pour lier rapidement le produit courant à une ou plusieurs catégories.<br />Vous pouvez aussi lier tous les produits d\'une catégorie à une autre ou enlever d\'une catégorie des produits liés qui sont dans une autre catégorie (voir ci-dessous pour des instructions supplémentaires).');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Affichez les sous-catégories sous :');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Définir comme défaut');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Définir cette catégorie ciblée sélectionnée comme valeur par défaut à afficher');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Tout sélectionner ou Aucun');
define('ERROR_CATEGORY_ID_INVALID', 'Catégorie liée ID#%u invalide (non ajouté).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Liens de produits vers plusieurs catégories mis à jour pour : %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'Le produit a été dissocié de la catégorie précédemment sélectionnée "%1$s" ID#%2$u, et est donc maintenant affiché dans sa catégorie principale.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'AVERTISSEMENT : Il y a %1$u sous-catégories disponibles pour les liens sur cette page, ce qui est supérieur à la limite PHP "max_input_vars" (actuellement %2$u). Cela signifie pas plus de %2$u des catégories peuvent être liées jusqu\'à ce que cette limite PHP soit augmentée dans votre hébergement.');

// Global Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Outils globaux de produit/catégorie');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'NOTE : Un ID de produit n\'a pas besoin d\'être défini pour utiliser la fonction \'Lier tous les produits d\'une catégorie à une autre catégorie\'.<br />Cependant, le fait de définir un ID Produits affichera les catégories disponibles et leurs ID respectifs.');

// Copy linked categories from one product to another product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Copier les catégories liées vers un autre produit');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Copiez les catégories liées du produit actuellement sélectionné %s vers un autre produit.<br>Vous pouvez <strong>Ajouter</strong> les catégories liées de ce produit au produit ciblé, ou vous pouvez <strong>Remplacez</strong> (supprimer + ajouter) les catégories liées du produit ciblé.<br>Remarque : Cette action ne copie pas la catégorie principale du produit source en tant que catégorie liée pour la catégorie ciblée, elle copie uniquement les catégories liées.');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Activer la liste déroulante de sélection de produits (répertorie <b>tous</b> les produits)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Sélectionnez le produit ciblé');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Copier-Ajouter des catégories liées');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Copier-Remplacer des Catégories liées');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Des catégories liées (%1$u) ont été ajoutées :<br>DE Produit de référence : %2$s<br>A Produit ciblé : %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Catégories liées (%1$u) pour le produit ciblé : %3$s<br>ont été <em>remplacées</em> par les catégories liées de produit : %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', 'Un produit ciblé n\'a pas été sélectionné !');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', 'Rien à faire!<br>Produit source : %1$s<br>n\'a aucune catégorie <em>supplémentaire</em> liée à copier vers<br>Produit ciblé : %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'ERREUR : ID de la catégorie principale manquant dans la table "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>pour le produit : %s');

// Copy as linked, all products from category source to category target
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Lier (copier) les produits d\'une catégorie à une autre catégorie');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Copier TOUS les produits dans une catégorie comme produits LIÉS dans une autre catégorie ...</strong><br />Exemple: Indiquer 8 et 22 lierait TOUS les produits de la catégorie 8 à la catégorie 22');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionnez TOUS les produits de la catégorie source ID# :');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Lien (copie) vers catégorie ciblée ID# : ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Copier les produits comme liés');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST', 'Catégorie <strong>de source</strong> ID#%u invalide (n\'existe pas)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST', 'Catégorie <strong>ciblée</strong> ID#%u invalide (n\'existe pas)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'Attention: mêmes ID\'s de catégorie (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', '<strong>Catégorie de source</strong> ID#%u invalide (ne contient aucun produit)');
define('WARNING_CATEGORY_SUBCATEGORIES', '<strong>Catégorie ciblée</strong> ID#%u non valide (contient des sous-catégories)');
define('SUCCESS_PRODUCT_COPIED', 'produit : %1$s a été lié à la catégorie ID#%2$u<br>');
define('SUCCESS_COPY_LINKED', '%1$u produit(s) lié(s) de catégorie de source ID#%2$u à la catégorie ciblée ID#%3$u');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'ATTENTION : Aucun produit copié (tous les produits de la catégorie ID#%1$u sont déjà liés à la catégorie ID#%2$u)');

// Remove linked products in reference category from target category
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Supprimer les produits liés d\'une catégorie');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Supprimer TOUS les produits d\'une catégorie qui sont des produits LIÉS à une autre catégorie ...</strong><br />Exemple: Indiquer 8 et 22 délierait  de la catégorie 22 TOUS les produits de la catégorie 8');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Sélectionner TOUS les produits dans la catégorie de référence :');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Supprimer tous les produits liés de la catégorie ciblée :');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Supprimer les produits liés');
define('SUCCESS_REMOVED_PRODUCT', 'produit : %1$s a été supprimé de la catégorie ID#%2$u<br>');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u produit(s) lié(s) supprimé(s)');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'ATTENTION : Rien à faire! Aucun produit dans la catégorie ciblée ID#%1$u n\'est lié à partir de la catégorie de référence ID#%2$u</strong>');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET', 'Produit : ID#%1$u "%2$s" (%3$s)<br>a le même catégorie maître ID de que la catégorie ciblée ID#%4$u<br>' );
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ATTENTION : CONFLIT D\'ID DE CATÉGORIES PRICIPALE !</strong><br>La catégorie de référence ID#%1$u pour la suppression des produits liés dans la catégorie ciblée ID#%2$u.<br>Vous avez demandé la suppression de certains produits liés d\'une catégorie ciblée. Un ou plusieurs de ces produits ont le même ID de catégorie principale que la catégorie ciblée. Cela signifie que le produit n\'est pas "lié" à la catégorie ciblée mais "réside" dans cette catégorie et ne peut donc pas être supprimée dans le cadre de cette demande de suppression de produits <i>liés</i>.<br>Si vous souhaitez <i>conserver</i> ce produit, vous devez modifier son catégorie pricipale ID vers une autre catégorie (par exemple, "Déplacer") avant de recommencer ce processus. Cela peut être fait sur cette page ou via l\'action "Déplacer" sur une page de liste Catégorie-Produit. Le premier produit avec un ID de catégorie principale en conflit a déjà été sélectionné pour modification.<br/>Si vous souhaitez <i>supprimer</i> ce produit, vous devez utiliser l\'action "Supprimer" sur la page de liste Catégorie-Produit.');

// Reset Master Categories ID for all products in a category
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Réinitialiser l\'ID de la catégorie principale pour TOUS les produits dans une catégorie');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Réinitialiser TOUS les produits de la catégorie sélectionnée pour utiliser la catégorie sélectionnée comme nouvel ID de catégorie maître ...</strong><br>Par exemple: Réinitialiser la catégorie 22 va positionner sur 22 l\'ID de catégorie maître de TOUS les produits de la catégorie 22');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Réinitialiser l\'ID de la catégorie principale pour tous les produits de la catégorie :');
define('BUTTON_RESET_CATEGORY_MASTER', 'Réinitialiser l\'ID de la catégorie principale');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', 'Tous les produits dans la catégorie ID#%1$d ont été réinitialisés pour avoir la catégorie principale ID#%1$d');
define('TEXT_CATEGORIES_NAME', 'Noms des catégories');
