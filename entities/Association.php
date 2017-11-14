<?php
/**
 * Association Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Association Entity Class
 */
class Association
{
    /**
     * @var  int  A reference to the associated item.
     */
    private $id;

    /**
     * @var  string  The context of the associated item.
     */
    private $context;

    /**
     * @var  string  The key for the association computed from an md5 on associated ids.
     */
    private $key;

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
     * Set the id value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setId($value)
    {
        return $this->id = (int)$value;
    }

    /**
     * Set the context value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setContext($value)
    {
        return $this->context = (string)$value;
    }

    /**
     * Set the key value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setKey($value)
    {
        return $this->key = (string)$value;
    }
}
