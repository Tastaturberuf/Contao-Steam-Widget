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
    {steam_legend},steamAppId,steamAppSubId,steamAppText;
    {protected_legend:hide},protected;
    {expert_legend:hide},guests,cssID,space,steamAppSize;
    {invisible_legend:hide},invisible,start,stop
';

/**
 * Add fields
 */
array_insert($GLOBALS['TL_DCA']['tl_content']['fields'], 0, array(
    'steamAppId'    => array(
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['steamAppId'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => array(
            'mandatory' => true,
            'tl_class'  => 'w50'
        ),
        'sql'       => "int(10) unsigned NOT NULL default '0'"
    ),
    'steamAppSubId' => array(
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['steamAppSubId'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => array(
            'tl_class' => 'w50'
        ),
        'sql'       => "int(10) unsigned NOT NULL default '0'"
    ),
    'steamAppText'  => array(
        'label'     => &$GLOBALS['TL_LANG']['tl_content']['steamAppText'],
        'exclude'   => true,
        'inputType' => 'textarea',
        'eval'      => array(
            'allowHtml'      => false,
            'decodeEntities' => true,
            'tl_class'       => 'clr'
        ),
        'sql'       => "text NULL"
    ),
    'steamAppSize'  => array(
        'label'         => &$GLOBALS['TL_LANG']['tl_content']['steamAppSize'],
        'exclude'       => true,
        'inputType'     => 'text',
        'load_callback' => array(
            array('steamwidget_tl_content', 'getSteamAppSize')
        ),
        'eval'          => array(
            'multiple'   => true,
            'size'       => 2,
            'tl_class'   => 'clr',
            'alwaysSave' => true
        ),
        'sql'           => "varchar(64) NOT NULL default ''"
    )
));

class steamwidget_tl_content
{

    /**
     * Set the default widget size if empty
     * @param string $strValue
     * @param \DataContainer $dc
     */
    public function getSteamAppSize($strValue, \DataContainer $dc)
    {
        $arrValues = deserialize($strValue);

        if ( $arrValues[0] == 0 )
        {
            $arrValues[0] = '646';
        }

        if ( $arrValues[1] == 0 )
        {
            $arrValues[1] = '190';
        }

        return serialize($arrValues);
    }

}
