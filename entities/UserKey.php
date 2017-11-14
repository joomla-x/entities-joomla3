<?php
/**
 * UserKey Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UserKey Entity Class
 */
class UserKey
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string
     */
    private $userId;

    /**
     * @var  string
     */
    private $token;

    /**
     * @var  string
     */
    private $series;

    /**
     * @var  int
     */
    private $invalid;

    /**
     * @var  string
     */
    private $time;

    /**
     * @var  string
     */
    private $uastring;

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
     * Set the userId value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setUserId($value)
    {
        return $this->userId = (string)$value;
    }

    /**
     * Set the token value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setToken($value)
    {
        return $this->token = (string)$value;
    }

    /**
     * Set the series value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSeries($value)
    {
        return $this->series = (string)$value;
    }

    /**
     * Set the invalid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setInvalid($value)
    {
        return $this->invalid = (int)$value;
    }

    /**
     * Set the time value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setTime($value)
    {
        return $this->time = (string)$value;
    }

    /**
     * Set the uastring value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setUastring($value)
    {
        return $this->uastring = (string)$value;
    }
}
