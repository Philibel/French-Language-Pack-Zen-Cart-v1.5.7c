<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Benny Philibel 2021-04-15 Modified in v1.5.7 $
 */
define('HEADING_TITLE', 'Gestionnaire de nom d\'option');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Contrôleur d\'attributs');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Avertissement : La valeur d\'option TEXT ID#0 a été trouvée manquante dans la table de base de données "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Cela peut être dû à un plugin mal codé.<br>La valeur a été restauré correctement.');
define('TABLE_HEADING_PRODUCT', 'Nom du produit');
define('TABLE_HEADING_OPTION_NAME', 'Nom de l\'option');
define('TABLE_HEADING_OPTION_VALUE', 'Valeur d\'option');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_PRODUCT_OPTIONS_INFO', '<strong> Remarque : modifiez le nom de l\'option pour des paramètres supplémentaires </strong>');

define('TEXT_WARNING_OF_DELETE', 'Cette option est utilisé par le ou les produits répertoriés ci-dessous: il ne peut pas être supprimé tant que toutes les valeurs d\'option (attributs) associés à ce nom d\'option n\'ont pas été supprimés de ces produits (cela peut être fait en utilisant les outils globaux ci-dessous) ');
define('TEXT_OK_TO_DELETE', 'Cette option n\'est utilisé par aucun produit - vous pouvez le supprimer en toute sécurité.<br><strong>Attention :</strong> cela supprimera à la fois le nom d\'option ET toutes les valeurs d\'option associées à ce nom d\'option.');

define('TEXT_OPTION_ID', 'Option ID');
define('TEXT_OPTION_NAME', 'Nom de l\'option');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','option ID#%1$u : duplicata nom d\'option ajouté : "%2$s" (%3$s)');

define('TEXT_ORDER_BY', 'Trier par');
define('TEXT_SORT_ORDER', 'Ordre de tri');

define('TABLE_HEADING_OPTION_TYPE', 'Type d\'option');
define('TABLE_HEADING_OPTION_NAME_SIZE', 'Taille');
define('TABLE_HEADING_OPTION_NAME_MAX', 'Max');

define('TEXT_OPTION_NAME_COMMENTS', 'Commentaire (affiché à côté du nom de l\'option)');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Images d\'attribut par ligne');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Style de disposition de l\'image d\'attribut (pour les cases à cocher/boutons radio uniquement)');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Voir des exemples');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Sélection + texte, Images sous les noms d\'options');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Sélectionnez + Image + Option en ligne');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Sélectionnez + Option + Image enveloppée');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Sélectionnez + Image + Option enveloppée');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Image + Option + Sélectionnez comme colonne');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Sélectionnez + Image + Option comme colonne');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Lignes');
define('TEXT_OPTION_NAME_SIZE', 'Taille d\'affichage');
define('TEXT_OPTION_NAME_MAX', 'Longueur maximale');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Remarque :' . TEXT_OPTION_NAME_ROWS . ',' . TEXT_OPTION_NAME_SIZE . 'et' . TEXT_OPTION_NAME_MAX . 'sont pour le type de nom d\'option "Texte" uniquement.');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Ajouter un nouveau nom d\'option');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Outils globaux');
define('TEXT_CLICK_TO_SHOW_HIDE', 'cliquez pour afficher/masquer');
define('TEXT_WARNING_BACKUP', 'Important: faites toujours une sauvegarde vérifiée de votre base de données avant de faire des changements globaux / en utilisant Global Tools');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Notez que les outils globaux ne peuvent pas être utilisés avec les types de nom d\'option "Texte" ou "Fichier".');
define('TEXT_SELECT_PRODUCT', 'Sélectionnez un produit');
define('TEXT_SELECT_CATEGORY', 'Sélectionnez une catégorie');
define('TEXT_SELECT_OPTION', 'Sélectionnez un nom d\'option');
define('TEXT_NAME', 'Nom');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong>Remarque :</strong> pour les produits qui sont mis à jour (reçoivent des valeurs d\'option supplémentaires) à l\'aide des outils <b>Ajouter</b>, l\'ordre de tri des valeurs d\'option (attributs) sera être réinitialisé à l\’ordre de tri <strong>par défaut</strong> pour ce nom d\’option.');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Mettre à jour (ajouter) à TOUS les produits TOUTES les valeurs d\'options pour un nom d\'option.');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Pour TOUS les produits qui utilisent le nom d\'option sélectionné (et qui ont donc au moins une valeur d\'option attribuée), ajoutez TOUTES les autres valeurs d\'option associées au nom d\'option.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Mettez à jour (ajoutez) toutes les valeurs d\'option restantes vers UN produit utilisant ce nom d\'option');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Pour un produit qui utilise le nom d\'option sélectionné (et qui a donc au moins une valeur d\'option attribuée), ajoutez TOUTES les autres valeurs d\'option associées au nom d\'option.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Mettre à jour (ajouter) toutes les valeurs d\'option restantes à TOUS les produits d\'une catégorie qui utilisent ce nom d\'option');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Pour les produits dans UNE seule catégorie qui utilisent le nom d\'option sélectionné, ajoutez TOUS les autressur les valeurs associées au nom de l\'option.');
define('TEXT_SHOW_CATEGORY_PATH', 'Afficher le chemin d\'accès de la catégorie');
define('TEXT_SHOW_CATEGORY_NAME', 'Afficher uniquement le nom de la catégorie');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Nom de l\'option "%1$s" : valeur de l\'option "%2$s" ajoutée au produit "%3$s".');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Nom de l\'option "%1$s" : produit "%2$s" Valeurs de l\'option mises à jour dans l\'ordre de tri par défaut pour le nom de l\'option "%1$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Option Name "%1$s" : produit "%2$s" mise à jour avec des valeurs d\'option supplémentaires');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Attention : Aucun produit correspondant n\'a été trouvé avec le nom d\'option "%s" (rien n\'a été mis à jour).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Attention : Tous les produits correspondants ont déjà toutes les valeurs d\'option pour le nom d\'option "%s" (rien n\'a été mis à jour).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>REMARQUE :</strong> Toutes les valeurs d\'option seront supprimées de la correspondance / du ou des produits sélectionnés. Cela ne supprimera pas les valeurs d\'option définies pour ce nom d\'option.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Supprimer toutes les valeurs d\'option de TOUS les produits utilisant ce nom d\'option');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Pour TOUS les produits qui utilisent le nom d\'option sélectionné, supprimez toutes les valeurs d\'option / le nom d\'option.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Supprimer toutes les valeurs d\'option d\'un produit en utilisant ce nom d\'option');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Pour un produit utilisant le nom d\'option sélectionné, supprimez TOUTES les valeurs d\'option / le nom d\'option.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Effacer sur UNE catégorie de produits TOUTES les valeurs d\'options pour ce nom d\'option');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Pour les produits dans UNE catégorie uniquement qui utilisent le nom de l\'option sélectionnée, supprimez toutes les valeurs de l\'option/le nom de l\'option.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Nom d\'option "%1$s" : toutes les valeurs d\'option supprimées du produit "%2$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Nom d\'option "%1$s" : toutes les valeurs d\'option supprimées de %2$u produit(s).');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Copier TOUTES les valeurs d\'options vers un autre nom d\'option');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Toutes les valeurs d\'option seront copiées depuis un nom d\'option vers un autre nom d\'option');
define('TEXT_SELECT_OPTION_FROM', 'Copier depuis le nom d\'option : ');
define('TEXT_SELECT_OPTION_TO', 'Copier dans le nom de l\'option :');

define('SUCCESS_OPTION_VALUE_COPIED', 'Valeur d\'option "%6$s" ID#%5$u copié du nom d\'option "%2$s" ID#%1$u vers le nom d\'option "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u Valeur(s) d\'option copiée du nom d\'option "%2$s" ID#%1$u vers le nom d\'option "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Erreur : Impossible de copier les valeurs d\'option dans le même nom d\'option ("%2$s" ID#%1$u vers "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Erreur : le nom d\'option "%2$s" ID#%1$u n\'a aucune valeur d\'option définie (rien à copier)!');
