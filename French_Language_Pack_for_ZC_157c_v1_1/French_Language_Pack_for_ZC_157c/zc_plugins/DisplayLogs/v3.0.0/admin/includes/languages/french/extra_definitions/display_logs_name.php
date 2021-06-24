<?php
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
// Version Française : Benny Philibel.com 2021 v1.5.7c
// Copyright (c) 2012-2016, Vinos de Frutas Tropicales (lat9)
//
define ('BOX_TOOLS_DISPLAY_LOGS', 'Afficher les fichiers journaux');

// -----
// This message is displayed in the admin header if any debug-logs are present.  When translating this message, be sure to keep the following "sprintf" tokens:
//
// %1$u ... Identifies the number of files present
// %2$s ... Contains the href to your admin's display-logs tool.
//
define ('DISPLAY_LOGS_MESSAGE_LOGS_PRESENT', '%1$u fichiers journaux de débogage existent, cliquez <a href="%2$s">ici</a> pour les afficher.');