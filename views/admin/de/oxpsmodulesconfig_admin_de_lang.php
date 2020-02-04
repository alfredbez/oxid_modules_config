<?php
/**
 * This file is part of OXID Module Configuration Im-/Exporter module.
 *
 * OXID Module Configuration Im-/Exporter module is free software:
 * you can redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 *
 * OXID Module Configuration Im-/Exporter module is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License
 * for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID Module Configuration Im-/Exporter module.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @category      module
 * @package       modulesconfig
 * @author        OXID Professional services
 * @link          http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 */

$sLangName = 'Deutsch';

$aLang = array(
    'charset'                                => 'UTF-8', // Supports DE chars like: �, �, �, etc.
    'oxpsmodulesconfig'                      => 'Modulkonfigurations-Im-/Exporter',

    // Common dashboard translations
    'OXPS_MODULESCONFIG_DASHBOARD'           => 'Modulkonfigurations-Export und -Import',
    'OXPS_MODULESCONFIG_NO_MODULES'          => 'Keine Module f�r Konfigurationsexport oder -import verf�gbar',

    // Form translations
    'OXPS_MODULESCONFIG_MODULES'             => 'Module f�r Export oder Import ausw�hlen.',
    'OXPS_MODULESCONFIG_MODULES_HELP'        => 'Halten Sie "Strg" gedr�ckt und w�hlen Sie dann Module, die von der Aktion ' .
                                                'zum Export oder Import der Konfigurationsdaten betroffen sein sollen.',
    'OXPS_MODULESCONFIG_ALL'                 => 'Alle ausw�hlen',
    'OXPS_MODULESCONFIG_NONE'                => 'Alle abw�hlen',
    'OXPS_MODULESCONFIG_SETTINGS'            => 'Einstellung f�r Export oder import w�hlen',
    'OXPS_MODULESCONFIG_SETTINGS_HELP'       => 'Bitte w�hlen Sie Einstellungs-Typen ab, die von der Aktion zum Export oder ' .
                                                'Import der Konfiguration nicht betoffen sein sollen.',
    'OXPS_MODULESCONFIG_EXPORT'              => 'Export',
    'OXPS_MODULESCONFIG_EXPORT_HELP'         => 'Alle ausgew�hlten Einstellungen der ausgew�hlten Module werden im JSON-Format ' .
                                                'exportiert und zum Download angeboten.',
    'OXPS_MODULESCONFIG_BACKUP'              => 'Sicherung',
    'OXPS_MODULESCONFIG_BACKUP_HELP'         => 'Alle ausgew�hlten Einstellungen der ausgew�hlten Module werden im JSON-Format ' .
                                                'exportiert und im Dateisystem unter "export/modules_config/" abgelegt.',
    'OXPS_MODULESCONFIG_FILE'                => 'W�hlen Sie eine JSON-Datei f�r den Import',
    'OXPS_MODULESCONFIG_FILE_HELP'           => 'Diese Datei muss ein g�ltiges JSON-Format mit OXID Modulkonfigurationsdaten enthalten.',
    'OXPS_MODULESCONFIG_IMPORT'              => 'Import',
    'OXPS_MODULESCONFIG_IMPORT_HELP'         => 'Alle ausgew�hlten Einstellungen der ausgew�hlten Module werden durch die ' .
                                                'entsprechenden Werte aus der importierten JSON-Datei �berschrieben. ' .
                                                'Ein automatisches Backup wird vor dem Import angelegt.',

    // Module settings translations
    'OXPS_MODULESCONFIG_SETTING_VERSION'     				          => 'Versionen',
    'OXPS_MODULESCONFIG_SETTING_EXTEND'      						  => 'Erweiterte Klassen',
    'OXPS_MODULESCONFIG_SETTING_FILES'       						  => 'Moduldateien',
    'OXPS_MODULESCONFIG_SETTING_TEMPLATES'   						  => 'Templates',
    'OXPS_MODULESCONFIG_SETTING_BLOCKS'      			 			  => 'Bl�cke',
    'OXPS_MODULESCONFIG_SETTING_SETTINGS'    			 			  => 'Einstellungen',
    'OXPS_MODULESCONFIG_SETTING_EVENTS'      			  			  => 'Events',
	'SHOP_MODULE_OXPS_MODULESCONFIG_SETTING_CONFIGURATION_DIRECTORY'  => 'Pfad zum Konfigurationsverzeichnis relativ zum Verzeichnis "modules/oxps/modulesconfig"',		

    // Errors
    'OXPS_MODULESCONFIG_ERR_NO_MODULES'      => 'Bitte w�hlen Sie mindestens ein Modul.',
    'OXPS_MODULESCONFIG_ERR_INVALID_MODULE'  => 'Ung�ltiges Modul ausgew�hlt! Bitte laden Sie die Seite neu und versuchen Sie es noch einmal.',
    'OXPS_MODULESCONFIG_ERR_NO_SETTINGS'     => 'Bitte w�hlen Sie mindestens eine Art von Einstellungen aus.',
    'OXPS_MODULESCONFIG_ERR_INVALID_SETTING' => 'Ung�ltige Einstellung ausgew�hlt! Bitte laden Sie die Seite neu und versuchen Sie es noch einmal.',
    'OXPS_MODULESCONFIG_ERR_INVALID_ACTION'  => 'Ung�ltige Anfrage. Bitte versuchen Sie es noch einmal.',
    'OXPS_MODULESCONFIG_ERR_EXPORT_FAILED'   => 'Export fehlgeschlagen. Bitte versuchen Sie es sp�ter noch einmal.',
    'OXPS_MODULESCONFIG_ERR_BACKUP_FAILED'   => 'Sicherung fehlgeschlagen. ' .
                                                'Bitte stellen Sie sicher, dass der eShop-Ordner "export/" beschreibbar ist und versuchen Sie es noch einmal.',

    // File upload errors
    'OXPS_MODULESCONFIG_ERR_NO_FILE'         => 'Bitte w�hlen Sie eine g�ltige Datei im JSON-Format f�r den Konfigurationsimport.',
    'OXPS_MODULESCONFIG_ERR_FILE_SIZE'       => 'Die hochgeladene Datei ist zu gro�. Bitte wenden Sie sich an Ihren Systemadministrator.',
    'OXPS_MODULESCONFIG_ERR_UPLOAD_ERROR'    => 'Upload fehlgeschlagen. Bitte versuchen Sie es sp�ter noch einmal.',
    'OXPS_MODULESCONFIG_ERR_FILE_TYPE'       => 'Dateiformat ung�ltig. Bitte w�hlen Sie eine Datei in JSON-Format, ' .
                                                'die Modulkonfigurationsdaten enth�lt.',
    'OXPS_MODULESCONFIG_ERR_CANNOT_READ'     => 'Die Datei konnte nicht gelesen werden. Bitte w�hlen Sie eine Datei in JSON-Format, ' .
                                                'die Modulkonfigurationsdaten enth�lt.',

    // JSON data errors
    'OXPS_MODULESCONFIG_ERR_EMPTY_DATA'      => 'Import-Daten nicht gefunden. Bitte w�hlen Sie eine Datei im JSON-Format, ' .
                                                'die Modulkonfigurationsdaten enth�lt.',
    'OXPS_MODULESCONFIG_ERR_INVALID_FORMAT'  => 'Datenformat der Import-Datei ung�ltig. Bitte w�hlen Sie eine Datei im JSON-Format, ' .
                                                'die Modulkonfigurationsdaten enth�lt.',
    'OXPS_MODULESCONFIG_ERR_SHOP_VERSION'    => 'Importdaten abgewiesen, da die Shop-Version nicht �bereinstimmt.',
    'OXPS_MODULESCONFIG_ERR_SHOP_EDITION'    => 'Importdaten abgewiesen, da die Shop-Edition nicht �bereinstimmt.',
    'OXPS_MODULESCONFIG_ERR_WRONG_SUBSHOP'   => 'Importdaten abgewiesen, da die Subshop-ID nicht �bereinstimmt.',

    // Messages
    'OXPS_MODULESCONFIG_MSG_BACKUP_SUCCESS'  => 'Sicherung erfolgreich angelegt. ' .
                                                'Die Datei wurde im eShop-Ordner unter "export/modules_config/" abgelegt.',
    'OXPS_MODULESCONFIG_MSG_IMPORT_SUCCESS'  => 'Modulkonfiguration erfolgreich importiert.',
);
