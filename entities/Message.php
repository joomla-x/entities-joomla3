<?php
/**
 * Message Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * Message Entity Class
 */
class Message
{
    /**
     * @var  int
     */
    private $messageId;

    /**
     * @var  int
     */
    private $userIdFrom = 0;

    /**
     * @var  int
     */
    private $userIdTo = 0;

    /**
     * @var  int
     */
    private $folderId = 0;

    /**
     * @var  string
     */
    private $dateTime = '0000-00-00 00:00:00';

    /**
     * @var  bool
     */
    private $state = false;

    /**
     * @var  bool
     */
    private $priority = false;

    /**
     * @var  string
     */
    private $subject = '';

    /**
     * @var  string
     */
    private $message;

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
     * Set the messageId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setMessageId($value)
    {
        return $this->messageId = (int)$value;
    }

    /**
     * Set the userIdFrom value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserIdFrom($value)
    {
        return $this->userIdFrom = (int)$value;
    }

    /**
     * Set the userIdTo value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserIdTo($value)
    {
        return $this->userIdTo = (int)$value;
    }

    /**
     * Set the folderId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setFolderId($value)
    {
        return $this->folderId = (int)$value;
    }

    /**
     * Set the dateTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setDateTime($value)
    {
        return $this->dateTime = (string)$value;
    }

    /**
     * Set the state value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setState($value)
    {
        return $this->state = (bool)$value;
    }

    /**
     * Set the priority value
     *
     * @param  bool  $value
     *
     * @return bool
     */
    protected function setPriority($value)
    {
        return $this->priority = (bool)$value;
    }

    /**
     * Set the subject value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setSubject($value)
    {
        return $this->subject = (string)$value;
    }

    /**
     * Set the message value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setMessage($value)
    {
        return $this->message = (string)$value;
    }
}
