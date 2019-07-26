<?php
/**
 * BEdita, API-first content management framework
 * Copyright 2019 ChannelWeb Srl, Chialab Srl
 *
 * This file is part of BEdita: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * See LICENSE.LGPL or <http://gnu.org/licenses/lgpl-3.0.html> for more details.
 */

namespace App\View;

use BEdita\WebTools\View\TwigView;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends TwigView
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize() : void
    {
        parent::initialize();

        $this->loadHelper('Time');
        $this->loadHelper('BEdita/WebTools.Html');
        $this->loadHelper('BEdita/WebTools.Thumb');
        $this->loadHelper('Url');
        $this->loadHelper('Flash');
        $this->loadHelper('BEdita/I18n.I18n');
    }
}
