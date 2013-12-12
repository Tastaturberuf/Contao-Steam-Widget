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
     * Extend the parent method
     * @return string
     */
    public function generate()
    {
        return parent::generate();
    }

    /**
     * Generate the module
     */
    protected function compile()
    {

    }

}
