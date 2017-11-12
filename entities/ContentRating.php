<?php
/**
 * ContentRating Entity Declaration
 *
 * @copyright  Copyright (C) 2015-2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla3\Entity;

use Joomla\ORM\Exception\PropertyNotFoundException;

/**
 * ContentRating Entity Class
 */
class ContentRating
{
    /**
     * @var  int
     */
    private $contentId = 0;

    /**
     * @var  int
     */
    private $ratingSum = 0;

    /**
     * @var  int
     */
    private $ratingCount = 0;

    /**
     * @var  string
     */
    private $lastip = '';

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
     * Set the contentId value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setContentId($value)
    {
        return $this->contentId = (int)$value;
    }

    /**
     * Set the ratingSum value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRatingSum($value)
    {
        return $this->ratingSum = (int)$value;
    }

    /**
     * Set the ratingCount value
     *
     * @param  int  $value
     *
     * @return int
     */
    protected function setRatingCount($value)
    {
        return $this->ratingCount = (int)$value;
    }

    /**
     * Set the lastip value
     *
     * @param  string  $value
     *
     * @return string
     */
    protected function setLastip($value)
    {
        return $this->lastip = (string)$value;
    }
}
