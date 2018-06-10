<?php

namespace Bolt\Extension\Bolt\BoltForms\Form\Entity;

use Bolt\Storage\Entity\Content as BoltContent;

/**
 * Standard base entity data class.
 *
 * Copyright (c) 2014-2016 Gawain Lynch
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License or GNU Lesser
 * General Public License as published by the Free Software Foundation,
 * either version 3 of the Licenses, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Gawain Lynch <gawain.lynch@gmail.com>
 * @copyright Copyright (c) 2014-2016, Gawain Lynch
 * @license   http://opensource.org/licenses/GPL-3.0 GNU Public License 3.0
 * @license   http://opensource.org/licenses/LGPL-3.0 GNU Lesser General Public License 3.0
 */
class Content extends BoltContent
{
    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        if (array_key_exists('title', $this->_fields)) {
            return $this->_fields['title'];
        }

        if (property_exists($this, 'title')) {
            return $this->title;
        }

        return null;
    }
}
