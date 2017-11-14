<?php
/**
 * MessageCfg Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * MessageCfg Entity Class
 */
class MessageCfg
{
    /**
     * @var  int
     */
    private $userId = 0;

    /**
     * @var  string
     */
    private $cfgName = '';

    /**
     * @var  string
     */
    private $cfgValue = '';

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
     * Set the userId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserId($value)
    {
        return $this->userId = (int)$value;
    }

    /**
     * Set the cfgName value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCfgName($value)
    {
        return $this->cfgName = (string)$value;
    }

    /**
     * Set the cfgValue value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCfgValue($value)
    {
        return $this->cfgValue = (string)$value;
    }
}
