<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Ce_steamwidget
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Tastaturberuf',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Tastaturberuf\ContentSteamWidget' => 'system/modules/ce_steamwidget/elements/ContentSteamWidget.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_steamwidget' => 'system/modules/ce_steamwidget/templates',
));
