<?php
/**
 * UserNote Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * UserNote Entity Class
 */
class UserNote
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  int
     */
    private $userId = 0;

    /**
     * @var  int
     */
    private $catid = 0;

    /**
     * @var  string
     */
    private $subject = '';

    /**
     * @var  string
     */
    private $body;

    /**
     * @var  int
     */
    private $state = 0;

    /**
     * @var  int
     */
    private $checkedOut = 0;

    /**
     * @var  string
     */
    private $checkedOutTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $createdUserId = 0;

    /**
     * @var  string
     */
    private $createdTime = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $modifiedUserId;

    /**
     * @var  string
     */
    private $modifiedTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $reviewTime = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishUp = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $publishDown = '0000-00-00 00:00:00';

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
     * @param  int  $value
     *
     * @return int
     */
    protected function setUserId($value)
    {
        return $this->userId = (int)$value;
    }

    /**
     * Set the catid value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCatid($value)
    {
        return $this->catid = (int)$value;
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
     * Set the body value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setBody($value)
    {
        return $this->body = (string)$value;
    }

    /**
     * Set the state value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setState($value)
    {
        return $this->state = (int)$value;
    }

    /**
     * Set the checkedOut value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCheckedOut($value)
    {
        return $this->checkedOut = (int)$value;
    }

    /**
     * Set the checkedOutTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCheckedOutTime($value)
    {
        return $this->checkedOutTime = (string)$value;
    }

    /**
     * Set the createdUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setCreatedUserId($value)
    {
        return $this->createdUserId = (int)$value;
    }

    /**
     * Set the createdTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCreatedTime($value)
    {
        return $this->createdTime = (string)$value;
    }

    /**
     * Set the modifiedUserId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setModifiedUserId($value)
    {
        return $this->modifiedUserId = (int)$value;
    }

    /**
     * Set the modifiedTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setModifiedTime($value)
    {
        return $this->modifiedTime = (string)$value;
    }

    /**
     * Set the reviewTime value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setReviewTime($value)
    {
        return $this->reviewTime = (string)$value;
    }

    /**
     * Set the publishUp value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishUp($value)
    {
        return $this->publishUp = (string)$value;
    }

    /**
     * Set the publishDown value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setPublishDown($value)
    {
        return $this->publishDown = (string)$value;
    }
}
