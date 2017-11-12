<?php
/**
 * RedirectLink Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * RedirectLink Entity Class
 */
class RedirectLink
{
    /**
     * @var  int
     */
    private $id;

    /**
     * @var  string
     */
    private $oldUrl;

    /**
     * @var  string
     */
    private $newUrl;

    /**
     * @var  string
     */
    private $referer;

    /**
     * @var  string
     */
    private $comment = '';

    /**
     * @var  int
     */
    private $hits = 0;

    /**
     * @var  int
     */
    private $published;

    /**
     * @var  string
     */
    private $createdDate = '0000-00-00 00:00:00';

    /**
     * @var  string
     */
    private $modifiedDate = '0000-00-00 00:00:00';

    /**
     * @var  int
     */
    private $header = 301;

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
     * Set the oldUrl value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setOldUrl($value)
    {
        return $this->oldUrl = (string)$value;
    }

    /**
     * Set the newUrl value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setNewUrl($value)
    {
        return $this->newUrl = (string)$value;
    }

    /**
     * Set the referer value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setReferer($value)
    {
        return $this->referer = (string)$value;
    }

    /**
     * Set the comment value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setComment($value)
    {
        return $this->comment = (string)$value;
    }

    /**
     * Set the hits value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setHits($value)
    {
        return $this->hits = (int)$value;
    }

    /**
     * Set the published value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setPublished($value)
    {
        return $this->published = (int)$value;
    }

    /**
     * Set the createdDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setCreatedDate($value)
    {
        return $this->createdDate = (string)$value;
    }

    /**
     * Set the modifiedDate value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setModifiedDate($value)
    {
        return $this->modifiedDate = (string)$value;
    }

    /**
     * Set the header value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setHeader($value)
    {
        return $this->header = (int)$value;
    }
}
