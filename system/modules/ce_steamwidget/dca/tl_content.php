<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   steamwidget
 * @author    Daniel Jahnsmüller
 * @license   GNU/LGPL
 * @copyright Tastaturberuf
 */
/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['steamWidget'] = '
    {type_legend},type,headline;
    {source_legend},steamAppId,steamAppSubId,steamAppText
';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['steamAppId'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['steamAppId'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array(
        'mandatory' => true,
        'tl_class'  => 'w50'
    ),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['steamAppSubId'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['steamAppSubId'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array(
        'tl_class' => 'w50'
    ),
    'sql'       => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['steamAppText'] = array(
    'label'       => &$GLOBALS['TL_LANG']['tl_content']['steamAppText'],
    'exclude'     => true,
    'inputType'   => 'textarea',
    'eval'        => array(
        'preserveTags'   => true,
        'decodeEntities' => true,
        'class'          => 'monospace',
        'rte'            => 'ace',
        'helpwizard'     => true,
        'tl_class'       => 'clr'
    ),
    'explanation' => 'insertTags',
    'sql'         => "text NULL"
);
