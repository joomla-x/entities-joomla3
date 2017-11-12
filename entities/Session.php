<?php
/**
 * Session Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Session Entity Class
 */
class Session
{
    /**
     * @var  string
     */
    private $sessionId = '';

    /**
     * @var  int
     */
    private $clientId = NULL;

    /**
     * @var  int
     */
    private $guest = 1;

    /**
     * @var  string
     */
    private $time = '';

    /**
     * @var  string
     */
    private $data;

    /**
     * @var  int
     */
    private $userid = 0;

    /**
     * @var  string
     */
    private $username = '';

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

        if (property_exists($this, $property)) {
            return $this->{$property} = $value;
        }
        
        throw new PropertyNotFoundException("Property $property not found in " . get_class($this));
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
     * Set the sessionId value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSessionId($value)
    {
        return $this->sessionId = (string)$value;
    }

    /**
     * Set the clientId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setClientId($value)
    {
        return $this->clientId = (int)$value;
    }

    /**
     * Set the guest value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setGuest($value)
    {
        return $this->guest = (int)$value;
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
     * Set the data value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setData($value)
    {
        return $this->data = (string)$value;
    }

    /**
     * Set the userid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserid($value)
    {
        return $this->userid = (int)$value;
    }

    /**
     * Set the username value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setUsername($value)
    {
        return $this->username = (string)$value;
    }
}
