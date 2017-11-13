<?php
/**
 * User Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * User Entity Class
 */
class User
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string
     */
    private $name = '';

    /**
     * @var  string
     */
    private $username = '';

    /**
     * @var  string
     */
    private $email = '';

    /**
     * @var  string
     */
    private $password = '';

    /**
     * @var  int
     */
    private $block = 0;

    /**
     * @var  int
     */
    private $sendEmail = 0;

    /**
     * @var  string
     */
    private $registerDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $lastvisitDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $activation = '';

    /**
     * @var  string
     */
    private $params;

    /**
     * @var  string  Date of last password reset
     */
    private $lastResetTime = '0000-00-00 00:00:00';

    /**
     * @var  int  Count of password resets since lastResetTime
     */
    private $resetCount = 0;

    /**
     * @var  string  Two factor authentication encrypted keys
     */
    private $otpKey = '';

    /**
     * @var  string  One time emergency passwords
     */
    private $otep = '';

    /**
     * @var  int  Require user to reset password on next login
     */
    private $requireReset = 0;

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
     * Set the name value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setName($value)
    {
        return $this->name = (string)$value;
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

    /**
     * Set the email value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setEmail($value)
    {
        return $this->email = (string)$value;
    }

    /**
     * Set the password value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPassword($value)
    {
        return $this->password = (string)$value;
    }

    /**
     * Set the block value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setBlock($value)
    {
        return $this->block = (int)$value;
    }

    /**
     * Set the sendEmail value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setSendEmail($value)
    {
        return $this->sendEmail = (int)$value;
    }

    /**
     * Set the registerDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setRegisterDate($value)
    {
        return $this->registerDate = (string)$value;
    }

    /**
     * Set the lastvisitDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLastvisitDate($value)
    {
        return $this->lastvisitDate = (string)$value;
    }

    /**
     * Set the activation value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setActivation($value)
    {
        return $this->activation = (string)$value;
    }

    /**
     * Set the params value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setParams($value)
    {
        return $this->params = (string)$value;
    }

    /**
     * Set the lastResetTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLastResetTime($value)
    {
        return $this->lastResetTime = (string)$value;
    }

    /**
     * Set the resetCount value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setResetCount($value)
    {
        return $this->resetCount = (int)$value;
    }

    /**
     * Set the otpKey value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setOtpKey($value)
    {
        return $this->otpKey = (string)$value;
    }

    /**
     * Set the otep value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setOtep($value)
    {
        return $this->otep = (string)$value;
    }

    /**
     * Set the requireReset value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRequireReset($value)
    {
        return $this->requireReset = (int)$value;
    }
}
