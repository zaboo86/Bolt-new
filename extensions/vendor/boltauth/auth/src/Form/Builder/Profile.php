<?php

namespace Bolt\Extension\BoltAuth\Auth\Form\Builder;

use Bolt\Extension\BoltAuth\Auth\Form\Entity;
use Bolt\Extension\BoltAuth\Auth\Form\Type;

/**
 * Profile form.
 *
 * Copyright (C) 2014-2016 Gawain Lynch
 * Copyright (C) 2017 Svante Richter
 *
 * @author    Gawain Lynch <gawain.lynch@gmail.com>
 * @copyright Copyright (c) 2014-2016, Gawain Lynch
 *            Copyright (C) 2017 Svante Richter
 * @license   https://opensource.org/licenses/MIT MIT
 */
class Profile extends AbstractFormBuilder
{
    /** @var Type\ProfileEditType */
    protected $type;
    /** @var Entity\Profile */
    protected $entity;
}
