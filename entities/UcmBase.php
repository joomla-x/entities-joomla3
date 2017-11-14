<?php
/**
 * UcmBase Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UcmBase Entity Class
 */
class UcmBase
{
    /**
     * @var  int
     */
    private $ucmId;

    /**
     * @var  int
     */
    private $ucmItemId;

    /**
     * @var  int
     */
    private $ucmTypeId;

    /**
     * @var  int
     */
    private $ucmLanguageId;

    /**
     * Redirect assignments through a setter, if available
     *
     * @param  string  $property
     * @param  mixed   $value
     *
     * @return mixed
     */
    public function __set($property, $value)
    {
        $method = 'set' . ucfirst($property);

        if (method_exists($this, $method)) {
            return call_user_func([$this, $method], $value);
        }

        return $this->{$property} = $value;
    }

    /**
     * Getter
     *
     * @param  string  $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        $method = 'get' . ucfirst($property);

        if (method_exists($this, $method)) {
            return call_user_func([$this, $method]);
        }

        if (property_exists($this, $property)) {
            return $this->{$property};
        }

        throw new PropertyNotFoundException("Property $property not found in " . get_class($this));
    }

    /**
     * Set the ucmId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmId($value)
    {
        return $this->ucmId = (int)$value;
    }

    /**
     * Set the ucmItemId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmItemId($value)
    {
        return $this->ucmItemId = (int)$value;
    }

    /**
     * Set the ucmTypeId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmTypeId($value)
    {
        return $this->ucmTypeId = (int)$value;
    }

    /**
     * Set the ucmLanguageId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUcmLanguageId($value)
    {
        return $this->ucmLanguageId = (int)$value;
    }
}
