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

namespace Tastaturberuf;

class ContentSteamWidget extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_steamwidget';

    /**
     * Generate the module
     */
    protected function compile()
    {
        // build the widget url
        if ( $this->steamAppText != '' )
        {
            $this->steamAppText = '?t='.rawurlencode($this->steamAppText);
        }

        $this->Template->steamAppUrl = sprintf('http://store.steampowered.com/widget/%u/%u/%s', $this->steamAppId, $this->steamAppSubId, $this->steamAppText);

        // provide widget sizes
        $arrSizes = deserialize($this->steamAppSize);

        $this->Template->width  = $arrSizes[0];
        $this->Template->height = $arrSizes[1];
    }

}
